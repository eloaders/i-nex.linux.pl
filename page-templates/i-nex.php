<?php
/**
 * Template Name: i-nex
 *
 * Page template for
 *
 * @package Openstrap
 * @since Openstrap 0.1
 */
$inex_version = of_get_option('config_inex_app_version');
$inex_version_arch = of_get_option('config_inex_app_version_arch');
$inex_version_manjaro = of_get_option('config_inex_app_version_manjaro');
$inex_version_linux_mint = of_get_option('config_inex_app_version_linux_mint');
$inex_version_ubuntu = of_get_option('config_inex_app_version_ubuntu');
$inex_version_fedora = of_get_option('config_inex_app_version_fedora');
$inex_version_opensuse = of_get_option('config_inex_app_version_opensuse');
$github_master_zip_url =      "https://github.com/eloaders/I-Nex/archive/master.zip";
$github_master_tar_gz_url = "https://github.com/eloaders/I-Nex/archive/master.tar.gz";
/**
*Brand Stickers
*/
$ARCH_LINUX_STICKER_URL     = of_get_option('arch_linux_sticker');
$MANJARO_STICKER_URL          = of_get_option('manjaro_linux_sticker');
$LINUX_MINT_STICKER_URL      = of_get_option('linux_mint_sticker');
$UBUNTU_STICKER_URL            = of_get_option('ubuntu_sticker');
$FEDORA_STICKER_URL            = of_get_option('fedora_sticker');
$OPEN_SUSE_STICKER_URL      = of_get_option('opensuse_sticker');
$SOURCE_CODE_STICKER_URL = of_get_option('src_git_sticker');
get_header(); ?>

<style type="text/css">
a.list-group-item {
    height:auto;
}
a.list-group-item.active small {
    color:#fff;
}
.stars {
    margin:20px auto 1px;    
}

</style>
<div class="container">
    <div class="row">
        <div class="well">
        <h1 class="text-center"><?php echo of_get_option('install_text'); ?></h1>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_donations">
                <input type="hidden" name="business" value="eloaders@linux.pl">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="item_name" value="I-Nex Linux">
                <input type="hidden" name="no_note" value="0">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
           </form>
        </div>
	<?php if(of_get_option('display_arch_linux_download') == '1'): ?>
	 <div class="list-group">
          <div class="list-group-item">
                <div class="media col-md-3">
                    <figure>
                        <img class="media-object img-rounded img-responsive "  src="<?php echo $ARCH_LINUX_STICKER_URL ; ?>">
                    </figure>
                </div>
                <div class="col-md-6">
                    <?php echo of_get_option('arch_linux_install_instructions'); ?>
                </div>
                <div class="col-md-3 text-center">
                    <h2><small> Download options: </small></h2>
                    <p><a href="https://aur.archlinux.org/packages/i-/i-nex-git/PKGBUILD" class="btn btn-default btn-sm" role="button"> PKGBUILD </a></p>
                    <p><a href="https://aur.archlinux.org/packages/i-nex-git/" class="btn btn-primary btn-sm active" role="button"> AUR GIT </a></p>
                    <p>Version: <small><?php echo $inex_version_arch ; ?></small></p>
                </div>
                <div class="clearfix"></div>
          </div>
	<?php endif; ?>
	<?php if(of_get_option('display_manjaro_linux_download') == '1'): ?>
          <div class="list-group-item">
                <div class="media col-md-3">
                    <figure>
                        <img class="media-object img-rounded img-responsive" src="<?php echo $MANJARO_STICKER_URL ; ?>">
                    </figure>
                </div>
                <div class="col-md-6">
		    <?php echo of_get_option('manjaro_install_instructions'); ?>
                </div>
                <div class="col-md-3 text-center">
                    <h2><small> Download options: </small></h2>
                    <p>
                       <a href="https://aur.archlinux.org/packages/i-/i-nex-git/PKGBUILD" class="btn btn-default btn-sm" role="button"> PKGBUILD </a>
                       <a href="https://github.com/manjaro/packages-community/blob/master/i-nex/PKGBUILD" class="btn btn-default btn-sm" role="button">Manjaro PKGBUILD </a>
                    </p>
                    <p>
                      <a href="https://aur.archlinux.org/packages/i-nex-git/" class="btn btn-primary btn-sm active" role="button"> AUR GIT </a></p>
                    <p>Version: <small><?php echo $inex_version_manjaro ; ?></small></p>
                </div>
                <div class="clearfix"></div>
          </div>
          <?php endif; ?>
          <?php if(of_get_option('display_linux_mint_download') == '1'): ?>
          <div class="list-group-item">
                <div class="media col-xs-12 col-md-3">
                    <figure>
                        <img class="media-object img-rounded img-responsive" src="<?php echo $LINUX_MINT_STICKER_URL ; ?>">
                    </figure>
                </div>
                <div class="col-md-6">
                    <?php echo of_get_option('linux_mint_install_instructions'); ?>
                </div>
                <div class="col-md-3 text-center">
                    <h2><small> Download options: </small></h2>
                    <p><a href="https://launchpad.net/~i-nex-development-team/+archive/stable" class="btn btn-default btn-sm active" role="button"> Stable PPA </a></p>
                    <p><a href="https://launchpad.net/~i-nex-development-team/+archive/daily" class="btn btn-default btn-sm" role="button"> Daily PPA </a></p>
                    <p><a href="https://launchpad.net/i-nex/+download" class="btn btn-primary btn-sm" role="button"> Direct Download </a></p>
                    <p>Version: <small><?php echo $inex_version_linux_mint ; ?></small></p>
                </div>
                <div class="clearfix"></div>
          </div>
          <?php endif; ?>
          <?php if(of_get_option('display_ubuntu_download') == '1'): ?>
          <div class="list-group-item">
                <div class="media col-xs-12 col-md-3">
                    <figure>
                        <img class="media-object img-rounded img-responsive" src="<?php echo $UBUNTU_STICKER_URL ; ?>">
                    </figure>
                </div>
                <div class="col-md-6">
                    <?php echo of_get_option('ubuntu_install_instructions'); ?>
                </div>
                <div class="col-md-3 text-center">
                    <h2><small> Download options: </small></h2>
                    <p><a href="https://launchpad.net/~i-nex-development-team/+archive/stable" class="btn btn-default btn-sm active" role="button"> Stable PPA </a></p>
                    <p><a href="https://launchpad.net/~i-nex-development-team/+archive/daily" class="btn btn-default btn-sm" role="button"> Daily PPA </a></p>
                    <p><a href="https://launchpad.net/i-nex/+download" class="btn btn-primary btn-sm" role="button"> Direct Download </a></p>
                    <p>Version: <small><?php echo $inex_version_ubuntu ; ?></small></p>
                </div>
                <div class="clearfix"></div>
          </div>
          <?php endif; ?>
          <?php if(of_get_option('display_fedora_linux_download') == '1'): ?>
          <div class="list-group-item">
                <div class="media col-xs-12 col-md-3">
                    <figure>
                        <img class="media-object img-rounded img-responsive" src="<?php echo $FEDORA_STICKER_URL ; ?>">
                    </figure>
                </div>
                <div class="col-md-6">
                    <?php echo of_get_option('fedora_install_instructions'); ?>
                </div>
                <div class="col-md-3 text-center">
                    <h2><small> Download options: </small></h2>
                    <p><a href="http://software.opensuse.org/download/package?project=Education&package=i-nex" class="btn btn-primary btn-sm active" role="button"> OBS Stable </a></p>
                    <p><a href="http://sourceforge.net/projects/postinstaller/files/fedora/releases/20/x86_64/updates/" class="btn btn-default btn-sm" role="button"> PostInstallerF </a></p>
                    <p>Version: <small><?php echo $inex_version_fedora ; ?></small></p>
                </div>
                <div class="clearfix"></div>
          </div>
          <?php endif; ?>
          <?php if(of_get_option('display_opensuse_download') == '1'): ?>
          <div class="list-group-item">
                <div class="media col-xs-12 col-md-3">
                    <figure>
                        <img class="media-object img-rounded img-responsive" src="<?php echo $OPEN_SUSE_STICKER_URL ; ?>">
                    </figure>
                </div>
                <div class="col-md-6">
                    <?php echo of_get_option('opensuse_install_instructions'); ?>
                </div>
                <div class="col-md-3 text-center">
                    <h2><small> Download options: </small></h2>
                    <p><a href="http://software.opensuse.org/download/package?project=Education&package=i-nex" class="btn btn-primary btn-sm active" role="button"> OBS Stable </a></p>
                    <p>Version: <small><?php echo $inex_version_opensuse ; ?> </small></p>
                </div>
                <div class="clearfix"></div>
          </div>
          <?php endif; ?>
          <?php if(of_get_option('display_source_download') == '1'): ?>
          <div class="list-group-item">
                <div class="media col-xs-12 col-md-3">
                    <figure>
                        <img class="media-object img-rounded img-responsive" src="<?php echo $SOURCE_CODE_STICKER_URL ; ?>">
                    </figure>
                </div>
                <div class="col-md-6">
                    <?php echo of_get_option('source_code_install_instructions'); ?>
                </div>
                <div class="col-md-3 text-center">
                    <h2><small> Download options: </small></h2>
                    <p><a href="https://github.com/eloaders/I-Nex" class="btn btn-primary btn-sm" role="button"> Github </a></p>
                    <p><a href="<?php echo $github_master_zip_url ; ?>" class="btn btn-primary btn-sm" role="button"> Master .zip </a></p>
                    <p><a href="<?php echo $github_master_tar_gz_url ; ?>" class="btn btn-primary btn-sm" role="button"> Master .tar.gz </a></p>
                    <p>Version: <small><?php echo $inex_version ; ?> </small></p>
                </div>
                <div class="clearfix"></div>
          </div>
          <?php endif; ?>
        </div>
        </div>
	</div>
</div>

<?php get_footer(); ?>
		