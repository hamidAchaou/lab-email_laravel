

function AppViewModel() {
    const self = this;

    // Observables for form inputs
    self.newTaskTitle = ko.observable("");
    self.newTaskAssignee = ko.observable("");
    self.newTaskStatus = ko.observable("To Do");

    // Task list
    self.tasks = ko.observableArray([]);

    // Add a new task
    self.addTask = function () {
        const newTask = {
            title: self.newTaskTitle(),
            assignee: self.newTaskAssignee(),
            status: self.newTaskStatus(),
        };
        self.tasks.push(newTask);

        // Clear form inputs
        self.newTaskTitle("");
        self.newTaskAssignee("");
        self.newTaskStatus("To Do");
    };
}

ko.applyBindings(new AppViewModel());

console.log("donne");
