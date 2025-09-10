import React, {useState} from "react";

function GuessingGame() {
  const [guess, setGuess] = useState("");
  const [message, setMessage] = useState("");
  const [targetNumber]= useState(Math.floor(Math.random() * 100) + 1);

  const handleSubmit = (e) => {
    e.preventDefault();
    alert(`Tebakan Kamu: ${guess}`);
    
  };

  const handleGuess = () => {
    const userGuess = parseInt(guess, 10);
    if (userGuess === targetNumber) {
      setMessage("Tebakan Kamu Benar!");
    }
    else if (userGuess < targetNumber) {
      setMessage("Tebakan Rendah! Coba Lagi.");
    } 
    else if (userGuess > targetNumber) {
      setMessage("Tebakan Tinggi! Coba Lagi.");
    } 
    else {
      setMessage("Masukkan angka yang valid.");
    }
};

  return (
    <div>
      <h1>Game Tebak Angka!</h1>
      <form onSubmit={handleSubmit}>
        <input
          type="number"
          value={guess}
          onChange={(e) => setGuess(e.target.value)}
          placeholder="Masukkan Tebakan"
        />
        <button onClick={handleGuess} type="submit">Submit Guess</button>
      </form>
      <p>{message}</p>
    </div>
  );
}

export default GuessingGame;