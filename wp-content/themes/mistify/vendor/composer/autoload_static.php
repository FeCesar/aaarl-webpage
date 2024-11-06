<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bdacd0e1d653807228d2514a2cff86a
{
    public static $files = array (
        'f40eb6b6e72038beec37d8a0baa6e2f0' => __DIR__ . '/../..' . '/inc/template-functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wolfcast\\' => 9,
        ),
        'K' => 
        array (
            'Kubio\\Theme\\' => 12,
        ),
        'C' => 
        array (
            'ColibriWP\\Theme\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wolfcast\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/browser-detection',
        ),
        'Kubio\\Theme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/kubio-themebase/src',
        ),
        'ColibriWP\\Theme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/colibriwp/src',
        ),
    );

    public static $classMap = array (
        'ColibriWP\\Theme\\ActiveCallback' => __DIR__ . '/../..' . '/lib/colibriwp/src/ActiveCallback.php',
        'ColibriWP\\Theme\\AssetsManager' => __DIR__ . '/../..' . '/lib/colibriwp/src/AssetsManager.php',
        'ColibriWP\\Theme\\ComponentsRepository' => __DIR__ . '/../..' . '/lib/colibriwp/src/ComponentsRepository.php',
        'ColibriWP\\Theme\\Components\\CSSOutput' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/CSSOutput.php',
        'ColibriWP\\Theme\\Components\\Footer' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/Footer.php',
        'ColibriWP\\Theme\\Components\\Footer\\FrontFooter' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/Footer/FrontFooter.php',
        'ColibriWP\\Theme\\Components\\FrontHeader\\ButtonsGroup' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/FrontHeader/ButtonsGroup.php',
        'ColibriWP\\Theme\\Components\\FrontHeader\\Hero' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/FrontHeader/Hero.php',
        'ColibriWP\\Theme\\Components\\FrontHeader\\Image' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/FrontHeader/Image.php',
        'ColibriWP\\Theme\\Components\\FrontHeader\\NavBar' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/FrontHeader/NavBar.php',
        'ColibriWP\\Theme\\Components\\FrontHeader\\Subtitle' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/FrontHeader/Subtitle.php',
        'ColibriWP\\Theme\\Components\\FrontHeader\\Title' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/FrontHeader/Title.php',
        'ColibriWP\\Theme\\Components\\FrontHeader\\TopBar' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/FrontHeader/TopBar.php',
        'ColibriWP\\Theme\\Components\\FrontHeader\\TopBarListIcons' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/FrontHeader/TopBarListIcons.php',
        'ColibriWP\\Theme\\Components\\FrontHeader\\TopBarSocialIcons' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/FrontHeader/TopBarSocialIcons.php',
        'ColibriWP\\Theme\\Components\\FrontPageContent' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/FrontPageContent.php',
        'ColibriWP\\Theme\\Components\\Header' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/Header.php',
        'ColibriWP\\Theme\\Components\\Header\\HeaderMenu' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/Header/HeaderMenu.php',
        'ColibriWP\\Theme\\Components\\Header\\HeroStyle' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/Header/HeroStyle.php',
        'ColibriWP\\Theme\\Components\\Header\\Logo' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/Header/Logo.php',
        'ColibriWP\\Theme\\Components\\Header\\NavBarStyle' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/Header/NavBarStyle.php',
        'ColibriWP\\Theme\\Components\\Header\\TopBar' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/Header/TopBar.php',
        'ColibriWP\\Theme\\Components\\InnerHeader\\Hero' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/InnerHeader/Hero.php',
        'ColibriWP\\Theme\\Components\\InnerHeader\\NavBar' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/InnerHeader/NavBar.php',
        'ColibriWP\\Theme\\Components\\InnerHeader\\Title' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/InnerHeader/Title.php',
        'ColibriWP\\Theme\\Components\\InnerHeader\\TopBar' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/InnerHeader/TopBar.php',
        'ColibriWP\\Theme\\Components\\MainContent' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/MainContent.php',
        'ColibriWP\\Theme\\Components\\MainContent\\ArchiveLoop' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/MainContent/ArchiveLoop.php',
        'ColibriWP\\Theme\\Components\\MainContent\\Loop' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/MainContent/Loop.php',
        'ColibriWP\\Theme\\Components\\MainContent\\PostLoop' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/MainContent/PostLoop.php',
        'ColibriWP\\Theme\\Components\\MainContent\\SingleItemTemplate' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/MainContent/SingleItemTemplate.php',
        'ColibriWP\\Theme\\Components\\PageContent' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/PageContent.php',
        'ColibriWP\\Theme\\Components\\PageNotFound' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/PageNotFound.php',
        'ColibriWP\\Theme\\Components\\PageSearch' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/PageSearch.php',
        'ColibriWP\\Theme\\Components\\Sidebar' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/Sidebar.php',
        'ColibriWP\\Theme\\Components\\SingleContent' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/SingleContent.php',
        'ColibriWP\\Theme\\Components\\WooContent' => __DIR__ . '/../..' . '/lib/colibriwp/src/Components/WooContent.php',
        'ColibriWP\\Theme\\Core\\ComponentBase' => __DIR__ . '/../..' . '/lib/colibriwp/src/Core/ComponentBase.php',
        'ColibriWP\\Theme\\Core\\ComponentInterface' => __DIR__ . '/../..' . '/lib/colibriwp/src/Core/ComponentInterface.php',
        'ColibriWP\\Theme\\Core\\ConfigurableInterface' => __DIR__ . '/../..' . '/lib/colibriwp/src/Core/ConfigurableInterface.php',
        'ColibriWP\\Theme\\Core\\EnableKubioInCustomizerPanel' => __DIR__ . '/../..' . '/lib/colibriwp/src/Core/EnableKubioInCustomizerPanel.php',
        'ColibriWP\\Theme\\Core\\Hooks' => __DIR__ . '/../..' . '/lib/colibriwp/src/Core/Hooks.php',
        'ColibriWP\\Theme\\Core\\PartialComponent' => __DIR__ . '/../..' . '/lib/colibriwp/src/Core/PartialComponent.php',
        'ColibriWP\\Theme\\Core\\PartialComponentInterface' => __DIR__ . '/../..' . '/lib/colibriwp/src/Core/PartialComponentInterface.php',
        'ColibriWP\\Theme\\Core\\Tree' => __DIR__ . '/../..' . '/lib/colibriwp/src/Core/Tree.php',
        'ColibriWP\\Theme\\Core\\Utils' => __DIR__ . '/../..' . '/lib/colibriwp/src/Core/Utils.php',
        'ColibriWP\\Theme\\Customizer' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer.php',
        'ColibriWP\\Theme\\Customizer\\ControlFactory' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/ControlFactory.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\AlignButtonGroupControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/AlignButtonGroupControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\ButtonControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/ButtonControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\ButtonGroupControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/ButtonGroupControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\ColibriControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/ColibriControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\ColibriWPControlsAdapter' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/ColibriWPControlsAdapter.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\ColorControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/ColorControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\ComposedControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/ComposedControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\ControlsGroupControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/ControlsGroupControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\CroppedImageControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/CroppedImageControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\GradientControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/GradientControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\IconControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/IconControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\ImageControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/ImageControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\InputControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/InputControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\LinkedSelectControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/LinkedSelectControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\MediaControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/MediaControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\PenControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/PenControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\PluginMessageControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/PluginMessageControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\RepeaterControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/RepeaterControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\SelectControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/SelectControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\SelectIconControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/SelectIconControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\SeparatorControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/SeparatorControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\SliderControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/SliderControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\SpacingControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/SpacingControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\SwitchControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/SwitchControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\UploadControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/UploadControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\VideoControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/VideoControl.php',
        'ColibriWP\\Theme\\Customizer\\Controls\\VueControl' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Controls/VueControl.php',
        'ColibriWP\\Theme\\Customizer\\CustomizerApi' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/CustomizerApi.php',
        'ColibriWP\\Theme\\Customizer\\Formatter' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Formatter.php',
        'ColibriWP\\Theme\\Customizer\\PanelFactory' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/PanelFactory.php',
        'ColibriWP\\Theme\\Customizer\\Panel\\ColibriPanel' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Panel/ColibriPanel.php',
        'ColibriWP\\Theme\\Customizer\\SectionFactory' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/SectionFactory.php',
        'ColibriWP\\Theme\\Customizer\\Sections\\ColibriSection' => __DIR__ . '/../..' . '/lib/colibriwp/src/Customizer/Sections/ColibriSection.php',
        'ColibriWP\\Theme\\Defaults' => __DIR__ . '/../..' . '/lib/colibriwp/src/Defaults.php',
        'ColibriWP\\Theme\\HeaderPresets' => __DIR__ . '/../..' . '/lib/colibriwp/src/HeaderPresets.php',
        'ColibriWP\\Theme\\PluginsManager' => __DIR__ . '/../..' . '/lib/colibriwp/src/PluginsManager.php',
        'ColibriWP\\Theme\\Theme' => __DIR__ . '/../..' . '/lib/colibriwp/src/Theme.php',
        'ColibriWP\\Theme\\ThemeTranslations' => __DIR__ . '/../..' . '/lib/colibriwp/src/ThemeTranslations.php',
        'ColibriWP\\Theme\\Translations' => __DIR__ . '/../..' . '/lib/colibriwp/src/Translations.php',
        'ColibriWP\\Theme\\View' => __DIR__ . '/../..' . '/lib/colibriwp/src/View.php',
        'Kubio\\Theme\\Components\\CSSOutput' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/CssOutput.php',
        'Kubio\\Theme\\Components\\Common\\HeroStyle' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/Common/HeroStyle.php',
        'Kubio\\Theme\\Components\\Common\\NavigationStyle' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/Common/NavigationStyle.php',
        'Kubio\\Theme\\Components\\Footer' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/Footer.php',
        'Kubio\\Theme\\Components\\FrontHeader\\Buttons' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/FrontHeader/Buttons.php',
        'Kubio\\Theme\\Components\\FrontHeader\\Hero' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/FrontHeader/Hero.php',
        'Kubio\\Theme\\Components\\FrontHeader\\Image' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/FrontHeader/Image.php',
        'Kubio\\Theme\\Components\\FrontHeader\\Navigation' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/FrontHeader/Navigation.php',
        'Kubio\\Theme\\Components\\FrontHeader\\Subtitle' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/FrontHeader/Subtitle.php',
        'Kubio\\Theme\\Components\\FrontHeader\\Title' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/FrontHeader/Title.php',
        'Kubio\\Theme\\Components\\FrontHeader\\TopBar' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/FrontHeader/TopBar.php',
        'Kubio\\Theme\\Components\\FrontHeader\\TopBarListIcons' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/FrontHeader/TopBarListIcons.php',
        'Kubio\\Theme\\Components\\FrontHeader\\TopBarSocialIcons' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/FrontHeader/TopBarSocialIcons.php',
        'Kubio\\Theme\\Components\\Header' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/Header.php',
        'Kubio\\Theme\\Components\\HeaderMenu' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/HeaderMenu.php',
        'Kubio\\Theme\\Components\\Header\\Logo' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/Header/Logo.php',
        'Kubio\\Theme\\Components\\InnerHeader\\Hero' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/InnerHeader/Hero.php',
        'Kubio\\Theme\\Components\\InnerHeader\\Navigation' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/InnerHeader/Navigation.php',
        'Kubio\\Theme\\Components\\InnerHeader\\Title' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/InnerHeader/Title.php',
        'Kubio\\Theme\\Components\\InnerHeader\\TopBar' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/InnerHeader/TopBar.php',
        'Kubio\\Theme\\Components\\MainContent' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/MainContent.php',
        'Kubio\\Theme\\Components\\MainContent\\ArchiveLoop' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/MainContent/ArchiveLoop.php',
        'Kubio\\Theme\\Components\\MainContent\\Loop' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/MainContent/Loop.php',
        'Kubio\\Theme\\Components\\MainContent\\PostLoop' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/MainContent/PostLoop.php',
        'Kubio\\Theme\\Components\\MainContent\\SingleItemTemplate' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/MainContent/SingleItemTemplate.php',
        'Kubio\\Theme\\Components\\PageContent' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/PageContent.php',
        'Kubio\\Theme\\Components\\PageNotFound' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/PageNotFound.php',
        'Kubio\\Theme\\Components\\SingleContent' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Components/SingleContent.php',
        'Kubio\\Theme\\Flags' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Flags.php',
        'Kubio\\Theme\\Theme' => __DIR__ . '/../..' . '/lib/kubio-themebase/src/Theme.php',
        'Wolfcast\\BrowserDetection' => __DIR__ . '/../..' . '/lib/browser-detection/BrowserDetection.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2bdacd0e1d653807228d2514a2cff86a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2bdacd0e1d653807228d2514a2cff86a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2bdacd0e1d653807228d2514a2cff86a::$classMap;

        }, null, ClassLoader::class);
    }
}
