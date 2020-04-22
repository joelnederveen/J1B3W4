<a class="item" href="character.php?id="<?php $data["id"] ?>">
        <div class="left">
            <img class="avatar" src="resources/images/"<?php $data["avatar"] ?>">
        </div>
        <div class="right">
            <h2><?php $data["name"] ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php $data["health"] ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php $data["attack"] ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php $data["defense"] ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>