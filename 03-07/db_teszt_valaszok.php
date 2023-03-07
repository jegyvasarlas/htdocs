<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sorszam = $_POST['test_sorszam'];
    if ($sorszam == 1) {


// Define the expected answers for each question
        $expected_answers = array(
            '1.1' => '3',
            '1.2' => '2',
            '1.3' => '1',
            '1.4' => '2',
            '1.5' => '2',
            '1.6' => '2',
            '1.7' => '3',
            '1.8' => '4',
            '1.9' => '3',
            '1.10' => '3',
        );
// Get the user's answers from the form
        $user_answers = array(
            '1.1' => isset($_POST['1_1']) ? $_POST['1_1'] : '',
            '1.2' => isset($_POST['1_2']) ? $_POST['1_2'] : '',
            '1.3' => isset($_POST['1_3']) ? $_POST['1_3'] : '',
            '1.4' => isset($_POST['1_4']) ? $_POST['1_4'] : '',
            '1.5' => isset($_POST['1_5']) ? $_POST['1_5'] : '',
            '1.6' => isset($_POST['1_6']) ? $_POST['1_6'] : '',
            '1.7' => isset($_POST['1_7']) ? $_POST['1_7'] : '',
            '1.8' => isset($_POST['1_8']) ? $_POST['1_8'] : '',
            '1.9' => isset($_POST['1_9']) ? $_POST['1_9'] : '',
            '1.10' => isset($_POST['1_10']) ? $_POST['1_10'] : '',
        );

        // Calculate the number of correct and incorrect answers
        $num_correct_answers = 0;
        $num_incorrect_answers = 0;
        foreach ($expected_answers as $question => $expected_answer) {
            if (isset($user_answers[$question])) {
                if ($user_answers[$question] === $expected_answer) {
                    $num_correct_answers++;
                } else {
                    $num_incorrect_answers++;
                }
            }
        }

        // Display the results to the user
        echo "You answered $num_correct_answers out of " . count($expected_answers) . " questions correctly.<br><br>";
        echo "<table>";
        foreach ($expected_answers as $question => $expected_answer) {
            $user_answer = isset($user_answers[$question]) ? $user_answers[$question] : '';
            echo "<tr><td>Question $question:</td>";
            if ($user_answer === '') {
                echo "<td>No answer provided</td></tr>";
            } elseif ($user_answer === $expected_answer) {
                echo "<td style='color: green;'>$user_answer (correct)</td></tr>";
            } else {
                echo "<td style='color: red;'>$user_answer (incorrect, expected $expected_answer)</td></tr>";
            }
        }
        echo "</table><br>";
        $grade = $num_correct_answers / count($expected_answers) * 100;
        echo "Your grade is $grade%.<br><br>";
    }
}
?>