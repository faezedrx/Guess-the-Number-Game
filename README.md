# Guess the Number Game

This is a simple web-based "Guess the Number" game created using PHP and Bootstrap for styling. The game generates a random number between 1 and 100, and the player must guess the number. After each guess, the game provides feedback on whether the guess is too high or too low, and the player continues guessing until they find the correct number.

## Features

- Generates a random number between 1 and 100.
- Provides feedback on whether the guess is higher or lower than the target number.
- Tracks the number of attempts made by the player.
- Resets the game once the correct number is guessed.
- Built with PHP for backend logic and Bootstrap for responsive front-end design.

## How to Play

1. Open the game in a browser.
2. Enter a guess (a number between 1 and 100).
3. The game will tell you if your guess is too high, too low, or correct.
4. Keep guessing until you find the correct number.
5. Once guessed correctly, the game will reset.

## Technologies Used

- **PHP**: For backend logic, random number generation, and handling user input.
- **Bootstrap**: To create a responsive and visually appealing user interface.
- **HTML & CSS**: For page structure and styling.


## Changelog

### Update: Improved Game Logic and UI
- **Added a Reset Button**: Allows players to restart the game at any point without guessing the correct number.
- **Input Validation**: Ensures guesses are within the range of 1 to 100.
- **Encapsulated Reset Logic**: Introduced a reusable `resetGame()` function for better code structure.
- **Enhanced Feedback Messages**: Clearer and more user-friendly feedback for invalid inputs and game reset.
- **Improved UI**: 
  - Styled feedback messages and buttons using Bootstrap.
  - Added spacing and alignment for a better user experience.
- **Updated Footer**: Displays the number of attempts dynamically.

### Previous Features
- Random number generation between 1 and 100.
- Feedback on whether the guess is too high, too low, or correct.
- Attempts counter to track user guesses.
