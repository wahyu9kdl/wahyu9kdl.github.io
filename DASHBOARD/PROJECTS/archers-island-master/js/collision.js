// collision detection function
const detectCollision = (el, target) => {
    if (el.position.x < target.position.x + target.width &&
        el.position.x + el.width > target.position.x &&
        el.position.y < target.position.y + target.height &&
        el.position.y + el.height > target.position.y) {
            return true;
    }
    return false;    
}