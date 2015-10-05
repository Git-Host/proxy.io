<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $pageTitle; ?></title>
<link href="<?php print(THEME_PATH); ?>/s1.css" rel="stylesheet" type="text/css">
<?php
include('local/foreverypage.php'); 
if (function_exists("ExtraHead")) ExtraHead();?>
</head>
<body>
<table id="top_bar" width="100%" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="1"><img alt="" src="<?php echo THEME_PATH ?>/images/tbl.png"></td>
    <td width="1"><a href="index.php" title=""><img width="200" height="80" id="logo" src="images/Logo.png" alt="<?php echo WEBSITE_TITLE; ?>"></a></td>
    <td width="1"><img alt="" src="<?php echo THEME_PATH ?>/images/tbc.png"></td>
    <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><form action="find.php" method="get" target="_self">
              <input name="keyword" type="text" size="20" maxlength="80">
			  <input name="type" type="hidden" value="search">
              <input type="submit" value="<?php echo Search; ?>"><span class="autohidden">
			  <input type="submit" value="<?php echo SearchPlaylist; ?>" onClick="document.getElementsByName('type')[0].value='searchlist';">
			  <a href="find_ex.php"><?php echo AdvancedSearch; ?></a>
			  </span>
            </form></td>
        </tr>
        <tr> 
          <td class="video_types">
			<?php foreach($Special_Titles as $id__=>$name__) {?>
			<a href="find.php?type=<?php echo $id__;?>"><?php echo $name__;?></a>&nbsp;|&nbsp; 
			<?php } ?>
			<a href="category.php"><?php echo Category;?></a>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td align="right">
<?php echo YourOrderbyIs; ?><a href="orderby.php" title="<?php echo OrderbyChooser; ?>"><?php echo $OrderbyCode[$_SESSION["orderby"]]; ?></a> |
<?php echo YourLangIs; ?><a href="lang.php" title="<?php echo LangChooser; ?>"><?php echo $LangCode[$_SESSION["lang"]]; ?></a> |
<?php echo YourLocalIs; ?><a href="local.php" title="<?php echo LocalChooser; ?>"><img class="localimg" src="images/cc/<?php echo $_SESSION["local"]; ?>.png"><?php echo $CountryCode[$_SESSION["local"]]; ?></a>
</td>
        </tr>
      </table></td>
    <td width="1"><img alt="" src="<?php echo THEME_PATH ?>/images/tbr.png"></td>
  </tr>
</table><?php
if (function_exists("ExtraHead2")) ExtraHead2();?>
<table width="100%" border="0">
  <tr><?php if ($pageHideLeft!=1) { ?>
  <td valign="top" width="1"><?php include('category_list.php'); ?></td><?php } ?>
  <td valign="top" id="content_datas">