<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<div class="main">
    <?php
    // Define the base URL for the images
    $images_url = plugin_dir_url(__DIR__) . 'assets/images/';
    ?>
    <div class="header">
        <img src="<?php echo esc_url($images_url . 'retack_logo.png'); ?>" alt="Retack AI">
    </div>
    <div class="banner">
        <img src="<?php echo esc_url($images_url . 'error_frame.png'); ?>" alt="Retack Dashboard">
    </div>
    <div class="input-features">
        <div id="input">
            <div class="input-title-1">
                <p>Input</p>
            </div>
            <div class='border'></div>
            <form method="post" action="options.php">
                <?php
                settings_fields('retack_options_group');
                do_settings_sections('retack_options_group');
                ?>
                <div class="api-form">
                    <label for="retack_api_key" class="api-form-label">Enter Environment Key</label>
                    <div class="api-form-input">
                        <input type="text" id="retack_api_key" name="retack_api_key" class="api-form-input-value" value="<?php echo esc_attr(get_option('retack_api_key')); ?>" />
                        <button type="submit" class="button-primary">
                            Save
                        </button>
                    </div>
                </div>
            </form>
            <div class="input-title-2">
                <p>Learn More</p>
            </div>
            <ol class="link-list">
                <li><a href="https://example.com/website" target="_blank">Website</a></li>
                <li><a href="https://example.com/docs" target="_blank">Docs</a></li>
                <li><a href="https://example.com/blogs" target="_blank">Blogs</a></li>
                <li>Contact support team: <a href="mailto:contact@truenary.com">contact@truenary.com</a></li>
            </ol>
        </div>
        <div id="features">
            <div class="input-title-1">
                <p>Features</p>
            </div>
            <div class='border'></div>
            <div class='features-list'>
                <div class="list-div">
                    <div class="alert">
                        <img src="<?php echo $images_url; ?>alert.png" alt="Error">
                    </div>
                    <p>Get Instant Error Alerts</p>
                </div>
                <div class="list-div">
                    <div class="insight">
                        <img src="<?php echo esc_url($images_url . 'search.png'); ?>" alt="Insights">
                    </div>
                    <p>Smart Insights</p>
                </div>
                <div class="list-div">
                    <div class="fix">
                        <img src="<?php echo esc_url($images_url . 'process.png'); ?>" alt="Code Fix">
                    </div>
                    <p>Code Fix Automation</p>
                </div>
                <div class="list-div">
                    <div class='plan'>
                        <img src="<?php echo esc_url($images_url . 'gift.png'); ?>" alt="Plan">
                    </div>
                    <p>Generous Free Plan</p>
                </div>
            </div>
            <div class="input-title-3">
                <p>Effortless Integration with</p>
            </div>
            <div class="socials">
                <div class='slack'>
                    <img src="<?php echo esc_url($images_url . 'slack.png'); ?>" alt="Slack">
                </div>
                <div class='email'>
                    <img src="<?php echo esc_url($images_url . 'email.png'); ?>" alt="Email">
                </div>
                <div class='teams'>
                    <img src="<?php echo esc_url($images_url . 'teams.png'); ?>" alt="Microsoft Teams">
                </div>
            </div>
        </div>
    </div>
</div>
