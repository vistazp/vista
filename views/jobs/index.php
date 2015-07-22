
<div id="content" class="span-24">
    <div id="job" class="span-24 last">

        <div class="span-24 last">
            <h1 id="headline"><?php echo htmlspecialchars($this->job[0]['title']); ?><span style="color:gray;"> at</span> <a href="<?php echo htmlspecialchars($this->job[0]['url']); ?>"><?php echo htmlspecialchars($this->job[0]['company']); ?></a></h1>
            <h2 id="location"><?php echo htmlspecialchars($this->job[0]['city']); ?>, <?php echo $this->job[0]['country']; ?></h2>
        </div>
        <div id="info" class="span-18 colborder">
            <div id="description">
                <?php $html = \michelf\markdown::defaultTransform(htmlspecialchars($this->job[0]['jobdescription']));
                echo $html;
                ?>

            </div>

            <br/><br/>

            <p>
                <strong>Type of position:</strong><?= ($this->job[0]['type_of_position'] == 'contractor') ? ' CONTRACTOR' : ' PERMANENT'; ?><br />
                <strong>Work hours:</strong><?= ($this->job[0]['work_hour'] == 'parttime') ? ' Part-time' : ' Full-time'; ?><br />
            </p>
            <form accept-charset="UTF-8" action="<?php echo URL; ?>jobs/goApply/<?php echo htmlspecialchars($this->job[0]['postid']); ?>" class="inline" method="post"><div style="margin:0;padding:0;display:inline"></div>
                <input class="newbutton inline" name="commit" type="submit" value="Apply now" />
            </form>          

        </div>
        <div id="sidebar" class="span-4 last">

            <div class="span-4 last">

                <h3>Share this job:</h3>
                <br/>
                <span class='st_email'></span>Email a Friend
                <hr/>
                <span class='st_twitter'></span>Tweet this job
                <hr/>
                <span class='st_facebook'></span>Share on Facebook
                <hr/>
                <span class='st_sharethis'></span>Other Options
                <hr/>
                <!-- Place this tag where you want the +1 button to render -->
                <g:plusone size="medium"></g:plusone>

                <!-- Place this tag after the last plusone tag -->
                <script type="text/javascript">
                    (function () {
                        var po = document.createElement('script');
                        po.type = 'text/javascript';
                        po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(po, s);
                    })();
                </script>

                <hr class="space"/>
                <hr/>
                <a href="mailto:admin@webjobnow@com"><img src="<?php echo URL; ?>public/images/ad_banner_right.jpg" alt="Ultra posting package" /></a>
                <hr class="space"/>
                <hr/>
                <a href="mailto:admin@webjobnow@com" ><img src="<?php echo URL; ?>public/images/ad_banner_right.jpg" alt="Ultra posting package" /></a>    
                <br/>
                <hr class="space"/>
                <hr/>
                <a href="mailto:admin@webjobnow@com" ><img src="<?php echo URL; ?>public/images/ad_banner_right.jpg" alt="Ultra posting package" /></a>    
                <br/>

            </div>
        </div>
        <hr class="space"/>

    </div>
</div>