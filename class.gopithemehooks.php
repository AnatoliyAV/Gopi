<?php

class GopiThemeHooks implements Gdn_IPlugin {
    /**
     * Setup is executed when theme is activated.
     *
     * @return void.
     */
    public function setup() {
    }

    /**
     * Adds class PageControls to discussion pagers.
     *
     * @param DiscussionController $sender Instance of the calling class.
     * @param mixed                $args   Event arguments.
     *
     * @return void.
     */
    public function discussionController_afterBuildPager_handler($sender, $args) {
        $args['Pager']->CssClass .= ' PageControls';
    }
}
