// Update motor values dynamically based on slider position
document.getElementById("motor1").oninput = function() { updateMotorValue("motor1", "motor1Value"); }
document.getElementById("motor2").oninput = function() { updateMotorValue("motor2", "motor2Value"); }
document.getElementById("motor3").oninput = function() { updateMotorValue("motor3", "motor3Value"); }
document.getElementById("motor4").oninput = function() { updateMotorValue("motor4", "motor4Value"); }
document.getElementById("motor5").oninput = function() { updateMotorValue("motor5", "motor5Value"); }
document.getElementById("motor6").oninput = function() { updateMotorValue("motor6", "motor6Value"); }

function updateMotorValue(motorId, valueId) {
    let value = document.getElementById(motorId).value;
    document.getElementById(valueId).textContent = value;
}

function savePose() {
    let motors = [];
    for (let i = 1; i <= 6; i++) {
        motors.push(document.getElementById(motor${i}).value);
    }
    let table = document.getElementById("poseTable").getElementsByTagName("tbody")[0];
    let row = table.insertRow();
    row.insertCell(0).textContent = table.rows.length;
    for (let i = 0; i < motors.length; i++) {
        row.insertCell(i + 1).textContent = motors[i];
    }
    row.insertCell(motors.length + 1).innerHTML = '<button onclick="loadPose(this)">Load</button> <button onclick="removePose(this)">Remove</button>';
}

function loadPose(button) {
    let row = button.parentElement.parentElement;
    for (let i = 0; i < 6; i++) {
        document.getElementById(motor${i + 1}).value = row.cells[i + 1].textContent;
        document.getElementById(motor${i + 1}Value).textContent = row.cells[i + 1].textContent;
    }
}

function removePose(button) {
    let row = button.parentElement.parentElement;
    row.parentElement.removeChild(row);
}

function runPose() {
    alert("Running pose...");
}

function resetPose() {
    for (let i = 1; i <= 6; i++) {
        document.getElementById(motor${i}).value = 90;
        document.getElementById(motor${i}Value).textContent = 90;
    }
}
