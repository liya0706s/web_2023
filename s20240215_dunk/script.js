document.addEventListener('DOMContentLoaded', function () {
    const shootButton = document.querySelector('.shoot-button');
    const ball = document.querySelector('.ball');
    const scoreElement = document.querySelector('.score');
    const highScoreElement = document.querySelector('.high-score');
    const timerElement = document.querySelector('.timer');
    
    let score = 0;
    let highScore = 0;
    let timer = 15;
    let gameTimer;
  
    shootButton.addEventListener('click', function () {
      if (timer > 0) {
        shootBall();
      }
    });
  
    function shootBall() {
      ball.style.bottom = '350px'; // 修改此數值可以調整投籃高度
      setTimeout(function () {
        ball.style.bottom = '70px'; // 球回到原位
        score++;
        scoreElement.textContent = score;
        if (score > highScore) {
          highScore = score;
          highScoreElement.textContent = highScore;
        }
      }, 500);
    }
  
    function resetGame() {
      score = 0;
      scoreElement.textContent = score;
      timer = 15;
      timerElement.textContent = timer;
      clearInterval(gameTimer);
    }
  
    function startGame() {
      resetGame();
      gameTimer = setInterval(function () {
        timer--;
        timerElement.textContent = timer;
        if (timer <= 0) {
          clearInterval(gameTimer);
          alert('Game Over! Your final score is: ' + score);
          resetGame();
        } else if (timer <= 5) {
          // 在最後5秒內隨機生成兩分球或三分球的分數
          if (Math.random() < 0.5) {
            score += 2;
          } else {
            score += 3;
          }
          scoreElement.textContent = score;
          if (score > highScore) {
            highScore = score;
            highScoreElement.textContent = highScore;
          }
        }
      }, 1000);
    }
  
    startGame();
  });
  