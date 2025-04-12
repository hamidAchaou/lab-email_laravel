@extends('layout.master')

@section('title', 'Task Management')

@section('header', 'Manage Your Tasks')

@section('content')
<h1>@yield('header', 'Task Management')</h1>

<div id="task-app">
    <!-- Task Form -->
    <form data-bind="submit: addTask">
        <div class="form-group">
            <label for="task-title">Task Title:</label>
            <input type="text" id="task-title" data-bind="value: newTaskTitle" required>
        </div>

        <div class="form-group">
            <label for="assignee">Assignee:</label>
            <input type="text" id="assignee" data-bind="value: newTaskAssignee" required>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select id="status" data-bind="value: newTaskStatus">
                <option value="To Do">To Do</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
            </select>
        </div>

        <button type="submit">Add Task</button>
    </form>

    <!-- Task List -->
    <div>
        <h2>Task List</h2>
        <ul data-bind="foreach: tasks">
            <li>
                <strong data-bind="text: title"></strong> -
                <span data-bind="text: assignee"></span> -
                <span data-bind="text: status"></span>
            </li>
        </ul>
    </div>
</div>

@endsection