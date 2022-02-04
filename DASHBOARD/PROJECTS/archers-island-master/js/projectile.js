class Projectile {
    constructor(position, playerOffset, image) {
        this.position = position;
        this.playerOffset = playerOffset;
        this.image = image;
        this.width = 32;
        this.height = 16;
        this.speed = { 
            x: 250, 
            y: 15
        };
    }
    draw(ctx) {
        ctx.drawImage(this.image, this.position.x, this.position.y, this.width, this.height);
    }
    update(deltaTime) {
        this.position.x -= this.speed.x / deltaTime;
        
        // slight downward drag to imitate gravity
        this.position.y += this.speed.y / deltaTime
    }
}