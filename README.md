# Robot-arm-

Robot Arm Control Panel Project

The Robot Arm Control Panel Project allows you to control 6 motors of a robotic arm through a web interface. In this project, the user can move the motors, save favorite positions in a MySQL database, and retrieve or run the saved positions.

⸻

What I Have Done in the Project

1. Database Setup:
	•	First, I created a new database named robot_control in phpMyAdmin using XAMPP.
	•	Inside the database, I created a table called poses with the following columns:
	•	id: with AUTO_INCREMENT and set as the PRIMARY KEY.
	•	motor1 to motor6: representing the angles of the six motors.
	•	status: to define the position status (0 = inactive, 1 = active).

2. Frontend Setup:
	•	Used HTML and CSS to create a page containing 6 sliders to control the motor angles.
	•	Added JavaScript to update values dynamically when adjusting the sliders and to send data via AJAX for saving positions into the database.

3. Backend Setup (PHP):
	•	db_connect.php: file for database connection using PDO.
	•	save_pose.php: file to save motor positions in the database from the slider values.
	•	get_run_pose.php: file to retrieve saved positions from the database.
	•	update_status.php: file to update the status of a position based on id and status.

4. Working with XAMPP:
	•	I ran XAMPP on my computer and made sure Apache and MySQL were running.
	•	Used phpMyAdmin to set up the database robot_control and the poses table.

5. Tested Functionalities:
	•	Adjusting motor angles using sliders.
	•	Saving positions using the Save Pose button.
	•	Retrieving positions using the Load Pose button.
	•	Running saved positions with the Run button.
	•	Resetting default values with the Reset button.

6. Database Interaction:
	•	Successfully stored positions in the database using the Save Pose button.
	•	Correctly retrieved saved positions when using Load Pose.
	•	Successfully updated the status of a position in the database when pressing Run.

⸻

How to Run the Project

1. Run XAMPP:
	•	Make sure XAMPP is running on your device.
	•	Start Apache and MySQL from the XAMPP Control Panel.

2. Interact with the Control Panel:
	•	Use the sliders in the frontend to adjust motor angles.
	•	Click Save Pose to store the position in the database.
	•	Click Run to execute the saved position.
	•	Click Load to retrieve saved positions.
	•	Click Reset to return motors to the default position (90 degrees).

⸻

Project Files and Folders
	•	index.html: frontend interface.
	•	style.css: frontend styling.
	•	script.js: JavaScript code to move motors and save positions.
	•	db_connect.php: database connection file.
	•	save_pose.php: save motor positions.
	•	get_run_pose.php: retrieve saved positions.
	•	update_status.php: update position status.
