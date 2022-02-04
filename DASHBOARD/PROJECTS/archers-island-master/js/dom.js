// DOM Elements

const display_stats_wrap = document.querySelector('.game_stats_wrap');

const display_player_one = document.querySelector('#display_player_one');
const display_player_two = document.querySelector('#display_player_two');
const display_turn = document.querySelector('#display_turn');
const display_round = document.querySelector('#display_round');

const start_button = document.querySelector('#start_button');
const fire_button = document.querySelector('#fire_button');
const pause_button = document.querySelector('#pause_button');
const reset_button = document.querySelector('#reset_button');

// Page Assets

const IMAGE_ONE = new Image();
IMAGE_ONE.src = './img/archer-1.png';

const IMAGE_TWO = new Image();
IMAGE_TWO.src = './img/archer-2.png';

const IMAGE_PROJECTILE = new Image();
IMAGE_PROJECTILE.src = './img/arrow.png';

const IMAGE_FISH_1 = new Image();
IMAGE_FISH_1.src = './img/crab-2.png';

const IMAGE_FISH_2 = new Image();
IMAGE_FISH_2.src = './img/fish-2.png';

const IMAGE_GOAL = new Image();
IMAGE_GOAL.src = './img/goal.png';

const IMAGE_BACKGROUND = new Image();
IMAGE_BACKGROUND.src = './img/bg-fixed.png';

const IMAGE_TITLE_SCREEN = new Image();
IMAGE_TITLE_SCREEN.src = './img/title-screen.png';

// Utility Functions

const updateStats = (target, value) => {
    target.innerText = value;
}

const updateAllStats = () => {
    updateStats(display_player_one, game.playerOne.score);
    updateStats(display_player_two, game.playerTwo.score);
    updateStats(display_turn, game.turn);
    updateStats(display_round, game.round);
}

const fishArr = [IMAGE_FISH_1, IMAGE_FISH_2];

const randomFish = () => {
    return fishArr[Math.floor(Math.random() * fishArr.length)];
}

// Event Handlers

start_button.onclick = () => {
    if (game.gamestate !== GAMESTATE.GAMEOVER) {
        game.startGame();
    }
}

fire_button.onclick = () => game.currentPlayer.shoot();

pause_button.onclick = () =>  {
    if (game.gamestate !== GAMESTATE.GAMEOVER && game.gamestate !== GAMESTATE.MENU) {
        game.togglePause();
    }
}

reset_button.onclick = () => {
    // revert to original values
    game.gamestate = GAMESTATE.MENU;
    game.playerOne.score = 0;
    game.playerOne.ammo = 3;
    game.playerTwo.ammo = 3;
    game.playerTwo.score = 0;
    game.turn = 1;
    game.round = 1;
    game.currentPlayer = game.playerOne;
    updateAllStats();
}