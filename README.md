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
