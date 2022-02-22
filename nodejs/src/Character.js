class Character {

    hit(points) {
        this.hp -= points;
    }

    isDead() {
        return this.hp == 0;
    }
}
