// initialize our canvas context

let canvas = document.getElementById("gameScreen");
let ctx = canvas.getContext("2d");
ctx.imageSmoothingEnabled = false;


// set our game screen variables

const GAME_WIDTH = canvas.getAttribute('width');
const GAME_HEIGHT = canvas.getAttribute('height');
const GAME_MARGIN = GAME_WIDTH * 0.05;
const GAME_BG_COLOR = '#333f58';
const GAME_TEXT_COLOR = '#FBBCAD';
const GAME_PLAYER_ONE_COLOR = '#ABD1BB';
const GAME_PLAYER_TWO_COLOR = '#ADECFB';

// initialize game object and stats

const GAMESTATE = {
    MENU: 0,
    RUNNING: 1,
    PAUSED: 2,
    GAMEOVER: 3
};

let game = new Game(GAME_WIDTH, GAME_HEIGHT, GAME_MARGIN);

updateAllStats();

// start our game loop

let lastTime = 0; 

const gameLoop = (timeStamp) => {

    // requestAnimationFrame returns a time stamp on each call
    // use this to calculate change in time each between each frame
    // this allows us to sync frame rate to users refresh rate
    let deltaTime = timeStamp - lastTime;
    lastTime = timeStamp;

    //clear the canvas
    ctx.clearRect(0, 0, GAME_WIDTH, GAME_HEIGHT);

    // draw the background
    ctx.drawImage(IMAGE_BACKGROUND, 0, 0, GAME_WIDTH, GAME_HEIGHT);

    // draw all game objects & projectiles
    game.update(deltaTime);
    game.draw(ctx);

    // request the next frame
    requestAnimationFrame(gameLoop);

}

requestAnimationFrame(gameLoop);
