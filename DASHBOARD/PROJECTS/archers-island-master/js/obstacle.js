class Obstacle {
    constructor(gameWidth, gameHeight, gameMargin) {
        this.gameWidth = gameWidth;
        this.gameHeight = gameHeight;
        this.gameMargin = gameMargin;
        this.image = randomFish();
        this.width = 32;
        this.height = 32;
        this.speed = 60;
        this.position = { 
            x: this.gameWidth / 2 - this.width, 
            y: this.gameHeight - this.gameMargin
        };
        this.active = true;
    }
    draw(ctx) {
        ctx.drawImage(this.image, this.position.x, this.position.y, this.width, this.height);
    }
    update(deltaTime) {
        this.position.y += this.speed / deltaTime;
        
        // check to see if we have hit edge of game area
        if (this.position.y > this.gameHeight - this.height || this.position.y < this.gameMargin * 4) {
            // reverse direction by setting speed to inverse of itself
            this.speed = -this.speed;
        }
    }
}