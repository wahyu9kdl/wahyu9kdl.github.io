class Game {
    constructor(gameWidth, gameHeight, gameMargin) {
        this.gameWidth = gameWidth;
        this.gameHeight = gameHeight;
        this.gameMargin = gameMargin;
        this.gamestate = GAMESTATE.MENU;
        this.playerOne = new Player(gameWidth, gameHeight, gameMargin, 'One', IMAGE_ONE);
        this.playerTwo = new Player(gameWidth, gameHeight, gameMargin, 'Two', IMAGE_TWO);
        this.goal = new Goal(gameWidth, gameHeight, gameMargin, IMAGE_GOAL)
        this.turn = 1;
        this.round = 1;
        this.currentPlayer = this.playerOne;
        this.projectiles = [];
        this.obstacle = new Obstacle(this.gameWidth, this.gameHeight, this.gameMargin);
    }
    draw(ctx) {
        if (this.gamestate === GAMESTATE.MENU) {
            screenHandler('menu');
            return;
        } else if (this.gamestate === GAMESTATE.GAMEOVER) {
            screenHandler('win');
            return;
        } else {
            screenHandler('playing');

            // draw only the current player
            this.currentPlayer.draw(ctx);

            // draw the goal
            this.goal.draw(ctx);

            // draw our obstacle if it is active
            if (this.obstacle) {
                this.obstacle.draw(ctx);
            }
            
            // draw every active projectile
            this.projectiles.forEach(el => {
                el.draw(ctx);
            });
        }

    }
    update(deltaTime) {
        // check if game state !== RUNNING
        if (this.gamestate === GAMESTATE.PAUSED 
            || this.gamestate === GAMESTATE.GAMEOVER
            || this.gamestate === GAMESTATE.MENU) {
            return;
        }

        // update both player positions so they are at equal heights when swapped
        this.playerOne.update(deltaTime);
        this.playerTwo.update(deltaTime);

        // update the goal
        this.goal.update(deltaTime);

        // update our obstacle if it is active
        if (this.obstacle) {
            this.obstacle.update(deltaTime);
        }

        // update projectiles & check collisions
        this.projectiles.forEach((el, index) => {

            // check collision with goal, if true remove this projectile & increment score
            if (detectCollision(el, this.goal)) {
                this.projectiles.splice(index, 1);
                this.goal.image.src = './img/goal-hit.png';
                setInterval(() => {
                    this.goal.image.src = './img/goal.png';
                }, 1000);
                this.currentPlayer.score += 1;
                updateAllStats();
            };

            // check collision with obstacles, if true remove arrow and obstacle
            if (this.obstacle) {
                if (detectCollision(el, this.obstacle)) {
                    this.projectiles.splice(index, 1);
                    this.obstacle = null;
                    setTimeout(() => {
                        this.obstacle = new Obstacle(this.gameWidth, this.gameHeight, this.gameMargin);
                    }, 5000)
                }
            }

            // remove from projectiles array once off-screen
            if (el.position.x < 0) {
                this.projectiles.splice(index, 1);
            }

            el.update(deltaTime);
        });

        // check win
        this.checkWin();

    }
    checkWin() {
        // if at the end of a round & one player has 3 or more points & all arrows have finished & and players are not tied
        if (this.playerTwo.ammo === 0 
            && this.playerOne.score != this.playerTwo.score
            && this.projectiles.length === 0
            && (this.playerOne.score >= 3 || this.playerTwo.score >= 3)) {
                console.log(`Final Score - Player 1: ${this.playerOne.score}, Player 2: ${this.playerTwo.score}`);
                this.gamestate = GAMESTATE.GAMEOVER;
        } else {
            return false;
        }
    }
    handleRound() {
        // if turn # is odd, assign player 1, and vice versa
        if (this.turn % 2 !== 0) {
            this.currentPlayer = this.playerOne;
        } else {
            this.currentPlayer = this.playerTwo;
        }

        // calculate current round 
        this.round = Math.ceil(this.turn / 2);
        
        // update display board
        updateAllStats();
    }
    togglePause() {
        if (this.gamestate == GAMESTATE.PAUSED) {
          this.gamestate = GAMESTATE.RUNNING;
        } else {
          this.gamestate = GAMESTATE.PAUSED;
        }
    }
    startGame() {
        this.gamestate = GAMESTATE.RUNNING;
    }
}