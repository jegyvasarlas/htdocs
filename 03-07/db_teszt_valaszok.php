<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sorszam = $_POST['test_sorszam'];
    if ($sorszam == 1) {
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
        echo "A helyes válaszaid száma: $num_correct_answers / " . count($expected_answers) . ".<br><br>";
        echo "<table>";
        foreach ($expected_answers as $question => $expected_answer) {
            $user_answer = isset($user_answers[$question]) ? $user_answers[$question] : '';
            echo "<tr><td>$question. kérdés:</td>";
            if ($user_answer === '') {
                echo "<td>Nincs válasz</td></tr>";
            } elseif ($user_answer === $expected_answer) {
                echo "<td style='color: green;'>$user_answer (helyes)</td></tr>";
            } else {
                echo "<td style='color: red;'>$user_answer (helytelen, helyes válasz: $expected_answer)</td></tr>";
            }
        }
        echo "</table><br>";
        $score = $num_correct_answers;
        $total = count($expected_answers);
        $percentage = $score / $total * 100;

        if ($score >= 0 && $score <= 5) {
            $grade = "elégtelen";
        } elseif ($score == 6) {
            $grade = "elégséges";
        } elseif ($score == 7) {
            $grade = "közepes";
        } elseif ($score >= 8 && $score <= 9) {
            $grade = "jó";
        } elseif ($score == 10) {
            $grade = "jeles";
        }

        echo "A helyes válaszaid száma: $score / $total.<br>";
        echo "Az eredményed: $percentage%.<br>";
        echo "Az osztályzatod: $grade<br><br>";
        echo "<a href='index.php'>Vissza a teszthez</a>";
    }
    if ($sorszam == 2) {
        $expected_answers = array(
            '1.1' => 'A',
            '1.2' => 'A',
            '1.3' => 'C',
            '1.4' => 'A',
            '1.5' => 'A',
            '1.6' => 'C',
            '1.7' => 'F',
            '1.8' => 'C',
            '1.9' => 'D',
            '1.10' => 'A',
        );
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
        echo "A helyes válaszaid száma: $num_correct_answers / " . count($expected_answers) . ".<br><br>";
        echo "<table>";
        foreach ($expected_answers as $question => $expected_answer) {
            $user_answer = isset($user_answers[$question]) ? $user_answers[$question] : '';
            echo "<tr><td>$question. kérdés:</td>";
            if ($user_answer === '') {
                echo "<td>Nincs válasz</td></tr>";
            } elseif ($user_answer === $expected_answer) {
                echo "<td style='color: green;'>$user_answer (helyes)</td></tr>";
            } else {
                echo "<td style='color: red;'>$user_answer (helytelen, helyes válasz: $expected_answer)</td></tr>";
            }
        }
        echo "</table><br>";
        $score = $num_correct_answers;
        $total = count($expected_answers);
        $percentage = $score / $total * 100;

        if ($score >= 0 && $score <= 5) {
            $grade = "elégtelen";
        } elseif ($score == 6) {
            $grade = "elégséges";
        } elseif ($score == 7) {
            $grade = "közepes";
        } elseif ($score >= 8 && $score <= 9) {
            $grade = "jó";
        } elseif ($score == 10) {
            $grade = "jeles";
        }

        echo "A helyes válaszaid száma: $score / $total.<br>";
        echo "Az eredményed: $percentage%.<br>";
        echo "Az osztályzatod: $grade<br><br>";
        echo "<a href='index.php'>Vissza a teszthez</a>";
    }
    if ($sorszam == 3) {
        $expected_answers = array(
            '1.1' => 'B',
            '1.2' => 'E',
            '1.3' => 'B',
            '1.4' => 'B',
            '1.5' => 'C',
            '1.6' => 'C',
            '1.7' => 'D',
            '1.8' => 'A',
            '1.9' => 'A',
            '1.10' => 'B',
        );
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
        echo "A helyes válaszaid száma: $num_correct_answers / " . count($expected_answers) . ".<br><br>";
        echo "<table>";
        foreach ($expected_answers as $question => $expected_answer) {
            $user_answer = isset($user_answers[$question]) ? $user_answers[$question] : '';
            echo "<tr><td>$question. kérdés:</td>";
            if ($user_answer === '') {
                echo "<td>Nincs válasz</td></tr>";
            } elseif ($user_answer === $expected_answer) {
                echo "<td style='color: green;'>$user_answer (helyes)</td></tr>";
            } else {
                echo "<td style='color: red;'>$user_answer (helytelen, helyes válasz: $expected_answer)</td></tr>";
            }
        }
        echo "</table><br>";
        $score = $num_correct_answers;
        $total = count($expected_answers);
        $percentage = $score / $total * 100;

        if ($score >= 0 && $score <= 5) {
            $grade = "elégtelen";
        } elseif ($score == 6) {
            $grade = "elégséges";
        } elseif ($score == 7) {
            $grade = "közepes";
        } elseif ($score >= 8 && $score <= 9) {
            $grade = "jó";
        } elseif ($score == 10) {
            $grade = "jeles";
        }

        echo "A helyes válaszaid száma: $score / $total.<br>";
        echo "Az eredményed: $percentage%.<br>";
        echo "Az osztályzatod: $grade<br><br>";
        echo "<a href='index.php'>Vissza a teszthez</a>";
    }
}
?>