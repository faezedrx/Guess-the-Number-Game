<?php
session_start();

// Initialize random number and attempts on first load
if (!isset($_SESSION['random_number'])) {
    resetGame();
}

// Reset the game function
function resetGame()
{
    $_SESSION['random_number'] = rand(1, 100); // Random number between 1 and 100
    $_SESSION['attempts'] = 0; // Reset attempts count
}

// Process user guess
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['reset'])) {
        // Reset the game when the reset button is clicked
        resetGame();
        $message = "Game reset! Try guessing the new number.";
    } else {
        $guess = intval($_POST['guess']);
        $_SESSION['attempts']++;

        // Validate the input
        if ($guess < 1 || $guess > 100) {
            $message = "Please enter a number between 1 and 100.";
        } elseif ($guess > $_SESSION['random_number']) {
            $message = "Your guess is too high!";
        } elseif ($guess < $_SESSION['random_number']) {
            $message = "Your guess is too low!";
        } else {
            $message = "🎉 Congratulations! You guessed the correct number " .
                $_SESSION['random_number'] . " in " . $_SESSION['attempts'] . " attempts.";
            resetGame();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <!-- Game Header -->
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Guess the Number</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center">Guess a number between 1 and 100:</p>
                        <!-- Display message if available -->
                        <?php if ($message): ?>
                            <div class="alert alert-info text-center">
                                <?php echo $message; ?>
                            </div>
                        <?php endif; ?>
                        <!-- Guess form -->
                        <form method="post" class="text-center">
                            <div class="mb-3">
                                <input type="number" name="guess" class="form-control" placeholder="Enter your number" min="1" max="100" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Submit Guess</button>
                        </form>
                        <form method="post" class="text-center mt-3">
                            <button type="submit" name="reset" class="btn btn-danger w-100">Reset Game</button>
                        </form>
                    </div>
                    <!-- Footer showing attempt count -->
                    <div class="card-footer text-center">
                        <small class="text-muted">Attempts: <?php echo $_SESSION['attempts'] ?? 0; ?></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
