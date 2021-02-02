                <!-- Disco ad esempio -->
                <main>
                <div class="cds-container container">
                    <?php foreach ($db as $key => $values) {
                        foreach ($values as $value) { ?>
                        <div class='cd'>
                            <img src="<?php echo $value['poster'];?>">
                            <h3><?php echo $value['title'];?></h3>
                            <span class="author"><?php echo $value['author'];?></span>
                            <span class="year"><?php echo $value['year'];?></span>
                        </div>
                        <?php } ?>
                    <?php } ?>
                </div> 
            </main>
        </div>
    </body>