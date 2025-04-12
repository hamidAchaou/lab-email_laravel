<?php
namespace App\Console\Commands;

use App\Mail\TaskNotificationMail;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendTaskReminders extends Command
{
    protected $signature = 'tasks:send-reminders';

    protected $description = 'Send reminders for tasks starting in 1 hour';

    public function handle()
    {
        $tasks = Task::where('start_time', '<=', Carbon::now()->addHour())
                     ->where('start_time', '>', Carbon::now())
                     ->get();

        foreach ($tasks as $task) {
            Mail::to($task->user->email)->send(new TaskNotificationMail($task));
        }

        $this->info('Reminders sent successfully!');
    }
}
