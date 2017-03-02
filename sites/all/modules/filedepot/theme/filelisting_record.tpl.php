<?php
/**
  * @file
  * filelisting_record.tpl.php
  */
?>
<?php
//require '/var/www/html/php/vendor/autoload.php';use Enzim\Lib\TikaWrapper\TikaWrapper;
?>

<div class="listing_record" id="folder_<?php print $subfolder_id ?>_rec_<?php print $fid ?>">
    <div style="padding-right:0px;">
        <div class="floatleft">
                <input id="chkfile<?php print $fid ?>" type="checkbox" name="chkfile" value="<?php print $fid ?>" onClick="updateCheckedItems(this)">
                <?php if ($show_favorite) { ?>
                    <a href="?id=<?php print $fid ?>" onclick="return false;"><img id="favitem<?php print $fid ?>" class="togglefavorite" src="<?php print $favorite_status_image ?>" TITLE="<?php print $LANG_favorite_status ?>"></a>
                <?php } ?>
				<!--padding-left:<?php print $padding_left ?>px;-->
                <span style="">
                    <a class="filedetailsdialog" href="<?php print $details_link_parms ?>"><img src="<?php print $extension_icon ?>"></a>
                </span>
                <!--<span style="padding-left:5px;padding-right:5px;color:#666;"><?php print $file_number ?></span>-->
                <span class="filedetailslink">
                    <a id="listingFilenameRec<?php print $fid ?>" class="filedetailsdialog" href="<?php print $details_link_parms ?>" TITLE="Click to view details"><?php $array = explode('.', $file_name, 2); print  substr($array[0],0,10).'_.'.$array[1] ?></a>
                </span>

                <!--<span  style="padding-left:10px;"><?php echo substr($doc_content,0,200)?></span>-->

                <span id="listingLockIconRec<?php print $fid ?>" style="padding-left:5px;display:<?php print $show_lock ?>"><img src="<?php print $locked_icon ?>" TITLE="File Locked"></span>
        </div>
        <!--<div class="tags" id="listingTagsRec<?php print $fid ?>"><?php print $tags ?></div>-->
        <div class="floatright">
          <?php if(isset($action1_link)) { ?>
            <div class="floatright <?php print $actionclass?>">
                <span><?php print $action1_link ?></span>
                <span><?php print $action2_link ?></span>
                <span style="display:<?php print $show_approvalsubmitter ?>;"><?php print $submitter ?></span>
            </div>
            <?php } ?>
            <div class="floatright" style="padding-right:40px"><?php print $modified_date ?></div>
        	<div class="floatright" style="padding-right:20px;width:150px"><?php echo $author_names?></div>
	    <div class="floatright" style="padding-right:40px;display:<?php print $show_submitter ?>;"><?php print $submitter ?></div>
            <div class="floatright" style="padding-right:20px;display:<?php print $show_foldername ?>;"><a href="#" onClick="makeAJAXGetFolderListing(<?php print $subfolder_id ?>);return false;"><?php print $folder_name ?></a></div>
        </div>
    </div>
    <div class="filedesc" id="filedesc_container_<?php print $fid ?>" style="padding-left:<?php print $file_desc_padding_left ?>px;padding-right:75px;display:none;">
        <div><span class="filedesc_span" id="listingDescriptionRec<?php print $fid ?>"><?php print $file_description ?></span>
          <div class="clearboth"></div>
        </div>
    </div>
</div>
<div style="padding-left:20px;width:80%;line-height: normal;"><?php echo substr($doc_content,0,200)?></div>
<div id="subfolder<?php print $subfolder_id ?>_rec<?php print $fid ?>_bottom"><?php print $more_records_message ?></div>

