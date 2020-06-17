<div class="container">
    <div class="row bg-dark text-center ">

        <?php
        $characters = new Characters();
        $getAllCharacters = $characters->getCharacters();

        foreach ($getAllCharacters as $character) {

            echo "<div class='col-sm'>
                    <div class='card m-2 p4'>
                        <div class='card-header'>
                            <b>" . $character->seriesName . "</b>
                        </div>
                        <div class='card-content'>
                        <img class='border m-2 shadow' src='public/img/characters/" . $character->pictureName . ".jpg' alt=" . $character->seriesName . ">
                            <ul>
                                <li class='list-style-none m-2'>Színész: " . $character->actorName . "</li>
                                <li class='list-style-none'>Szinkron hang: " . $character->voiceActorName . "</li>
                            </ul>
                        </div>
                    </div>
                </div>";
        }

        ?>
    </div>
</div>