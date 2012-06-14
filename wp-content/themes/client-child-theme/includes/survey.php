<?php

class Survey {

	protected static $mysqli;

	public function __construct() {
		if (!self::$mysqli) {
			error_reporting(0);
			self::$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		}
	}

	public function addVote($questionID, $answer) {
		if (!self::$mysqli->connect_errno) {
			$sql = "INSERT INTO survey_responses (questionID, answer) VALUES (?, ?)";
			$stmt = self::$mysqli->prepare($sql);
			if ($stmt) {
				$stmt->bind_param('is', $questionID, $answer);
				$stmt->execute();
				$stmt->close();
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		else {
			return FALSE;
		}
	}

	public function __destruct() {
		self::$mysqli->close();
	}

}