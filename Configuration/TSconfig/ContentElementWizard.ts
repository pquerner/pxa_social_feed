mod.wizards.newContentElement.wizardItems.plugins {
    elements {
        pxasocialfeed {
            icon = ../typo3conf/ext/pxa_social_feed/ext_icon.gif
            title = LLL:EXT:pxa_social_feed/Resources/Private/Language/locallang_be.xlf:mlang_tabs_tab
            description = LLL:EXT:pxa_social_feed/Resources/Private/Language/locallang_be.xlf:pi1_wiz_description
            tt_content_defValues {
                CType = list
                list_type = pxasocialfeed_showfeed
            }
        }
    }
}