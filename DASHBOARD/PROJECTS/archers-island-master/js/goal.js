class Goal {
    constructor(gameWidth, gameHeight, gameMargin, image) {
        this.gameWidth = gameWidth;
        this.gameHeight = gameHeight;
        this.gameMargin = gameMargin;
        this.image = image;
        this.width = 48;
        this.height = 48;
        this.speed = { x: 40, y: 60 };
        this.position = {
            x: gameMargin,
            y: gameHeight / 2
        }
    }
    draw(ctx) {
        ctx.drawImage(this.image, this.position.x, this.position.y, this.width, this.height); 
    }
    update(deltaTime) {
        this.position.y += this.speed.y / deltaTime;
        this.position.x += this.speed.x / deltaTime;

        // check to see if we have hit edge of game screen Y-AXIS
        if (this.position.y + this.height > this.gameHeight - this.gameMargin || this.position.y < this.gameMargin) {
            // reverse Y direction
            this.speed.y = -this.speed.y;
        }
        
        // check to see if we have hit edge of defined X-AXIS range (game margin * 6)
        if (this.position.x + this.width > this.gameMargin * 6 || this.position.x < 0) {
            // reverse X direction
            this.speed.x = -this.speed.x;
        }
    }
}