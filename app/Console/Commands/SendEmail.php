<?php

namespace App\Console\Commands;

use App\Mail\TaskNotificationMail;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send emails to users 1 hour before their tasks start';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Fetch tasks that are starting within the next hour
        $tasks = Task::where('start_time', '<=', Carbon::now()->addHour())
            ->where('start_time', '>', Carbon::now())
            ->get();

        foreach ($tasks as $task) {
            // Send an email to the assigned user
            Mail::to($task->user->email)->send(new TaskNotificationMail($task));

            $this->info("Email sent to {$task->user->email} for task: {$task->title}");
        }

        $this->info('All reminders have been sent.');
    }
}
