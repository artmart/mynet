<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * ap_DevDebugProjectContainer
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class ap_DevDebugProjectContainer extends Container
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'a2lix_translation_form.default.listener.translations' => 'getA2lixTranslationForm_Default_Listener_TranslationsService',
            'a2lix_translation_form.default.listener.translationsforms' => 'getA2lixTranslationForm_Default_Listener_TranslationsformsService',
            'a2lix_translation_form.default.service.translation' => 'getA2lixTranslationForm_Default_Service_TranslationService',
            'a2lix_translation_form.default.type.translations' => 'getA2lixTranslationForm_Default_Type_TranslationsService',
            'a2lix_translation_form.default.type.translationsfields' => 'getA2lixTranslationForm_Default_Type_TranslationsfieldsService',
            'a2lix_translation_form.default.type.translationsforms' => 'getA2lixTranslationForm_Default_Type_TranslationsformsService',
            'a2lix_translation_form.default.type.translationslocalesselector' => 'getA2lixTranslationForm_Default_Type_TranslationslocalesselectorService',
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter.yui_css' => 'getAssetic_Filter_YuiCssService',
            'assetic.filter.yui_js' => 'getAssetic_Filter_YuiJsService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.deprecation_logger_listener' => 'getDebug_DeprecationLoggerListenerService',
            'debug.emergency_logger_listener' => 'getDebug_EmergencyLoggerListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'debug.templating.engine.php' => 'getDebug_Templating_Engine_PhpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_facebook.api' => 'getFosFacebook_ApiService',
            'fos_facebook.helper' => 'getFosFacebook_HelperService',
            'fos_facebook.twig' => 'getFosFacebook_TwigService',
            'fos_user.change_password.form' => 'getFosUser_ChangePassword_FormService',
            'fos_user.change_password.form.handler.default' => 'getFosUser_ChangePassword_Form_Handler_DefaultService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.entity_manager' => 'getFosUser_EntityManagerService',
            'fos_user.group.form' => 'getFosUser_Group_FormService',
            'fos_user.group.form.handler' => 'getFosUser_Group_Form_HandlerService',
            'fos_user.group.form.type' => 'getFosUser_Group_Form_TypeService',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form' => 'getFosUser_Profile_FormService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form' => 'getFosUser_Registration_FormService',
            'fos_user.registration.form.handler' => 'getFosUser_Registration_Form_HandlerService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form' => 'getFosUser_Resetting_FormService',
            'fos_user.resetting.form.handler' => 'getFosUser_Resetting_Form_HandlerService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'genemu.form.core.type.captcha' => 'getGenemu_Form_Core_Type_CaptchaService',
            'genemu.form.core.type.plain' => 'getGenemu_Form_Core_Type_PlainService',
            'genemu.form.core.type.recaptcha' => 'getGenemu_Form_Core_Type_RecaptchaService',
            'genemu.form.core.type.tinymce' => 'getGenemu_Form_Core_Type_TinymceService',
            'genemu.form.entity.type.ajaxentity' => 'getGenemu_Form_Entity_Type_AjaxentityService',
            'genemu.form.jquery.type.autocompleter.choice' => 'getGenemu_Form_Jquery_Type_Autocompleter_ChoiceService',
            'genemu.form.jquery.type.autocompleter.country' => 'getGenemu_Form_Jquery_Type_Autocompleter_CountryService',
            'genemu.form.jquery.type.autocompleter.currency' => 'getGenemu_Form_Jquery_Type_Autocompleter_CurrencyService',
            'genemu.form.jquery.type.autocompleter.document' => 'getGenemu_Form_Jquery_Type_Autocompleter_DocumentService',
            'genemu.form.jquery.type.autocompleter.entity' => 'getGenemu_Form_Jquery_Type_Autocompleter_EntityService',
            'genemu.form.jquery.type.autocompleter.language' => 'getGenemu_Form_Jquery_Type_Autocompleter_LanguageService',
            'genemu.form.jquery.type.autocompleter.locale' => 'getGenemu_Form_Jquery_Type_Autocompleter_LocaleService',
            'genemu.form.jquery.type.autocompleter.model' => 'getGenemu_Form_Jquery_Type_Autocompleter_ModelService',
            'genemu.form.jquery.type.autocompleter.timezone' => 'getGenemu_Form_Jquery_Type_Autocompleter_TimezoneService',
            'genemu.form.jquery.type.chosen.choice' => 'getGenemu_Form_Jquery_Type_Chosen_ChoiceService',
            'genemu.form.jquery.type.chosen.country' => 'getGenemu_Form_Jquery_Type_Chosen_CountryService',
            'genemu.form.jquery.type.chosen.currency' => 'getGenemu_Form_Jquery_Type_Chosen_CurrencyService',
            'genemu.form.jquery.type.chosen.document' => 'getGenemu_Form_Jquery_Type_Chosen_DocumentService',
            'genemu.form.jquery.type.chosen.entity' => 'getGenemu_Form_Jquery_Type_Chosen_EntityService',
            'genemu.form.jquery.type.chosen.language' => 'getGenemu_Form_Jquery_Type_Chosen_LanguageService',
            'genemu.form.jquery.type.chosen.locale' => 'getGenemu_Form_Jquery_Type_Chosen_LocaleService',
            'genemu.form.jquery.type.chosen.model' => 'getGenemu_Form_Jquery_Type_Chosen_ModelService',
            'genemu.form.jquery.type.chosen.timezone' => 'getGenemu_Form_Jquery_Type_Chosen_TimezoneService',
            'genemu.form.jquery.type.color' => 'getGenemu_Form_Jquery_Type_ColorService',
            'genemu.form.jquery.type.date' => 'getGenemu_Form_Jquery_Type_DateService',
            'genemu.form.jquery.type.file' => 'getGenemu_Form_Jquery_Type_FileService',
            'genemu.form.jquery.type.geolocation' => 'getGenemu_Form_Jquery_Type_GeolocationService',
            'genemu.form.jquery.type.image' => 'getGenemu_Form_Jquery_Type_ImageService',
            'genemu.form.jquery.type.rating' => 'getGenemu_Form_Jquery_Type_RatingService',
            'genemu.form.jquery.type.slider' => 'getGenemu_Form_Jquery_Type_SliderService',
            'genemu.form.jquery.type.tokeninput.choice' => 'getGenemu_Form_Jquery_Type_Tokeninput_ChoiceService',
            'genemu.form.jquery.type.tokeninput.country' => 'getGenemu_Form_Jquery_Type_Tokeninput_CountryService',
            'genemu.form.jquery.type.tokeninput.currency' => 'getGenemu_Form_Jquery_Type_Tokeninput_CurrencyService',
            'genemu.form.jquery.type.tokeninput.document' => 'getGenemu_Form_Jquery_Type_Tokeninput_DocumentService',
            'genemu.form.jquery.type.tokeninput.entity' => 'getGenemu_Form_Jquery_Type_Tokeninput_EntityService',
            'genemu.form.jquery.type.tokeninput.language' => 'getGenemu_Form_Jquery_Type_Tokeninput_LanguageService',
            'genemu.form.jquery.type.tokeninput.locale' => 'getGenemu_Form_Jquery_Type_Tokeninput_LocaleService',
            'genemu.form.jquery.type.tokeninput.model' => 'getGenemu_Form_Jquery_Type_Tokeninput_ModelService',
            'genemu.form.jquery.type.tokeninput.timezone' => 'getGenemu_Form_Jquery_Type_Tokeninput_TimezoneService',
            'genemu.form.model.type.ajaxmodel' => 'getGenemu_Form_Model_Type_AjaxmodelService',
            'genemu.form.type_recaptcha.validator' => 'getGenemu_Form_TypeRecaptcha_ValidatorService',
            'genemu.gd.captcha' => 'getGenemu_Gd_CaptchaService',
            'genemu.twig.extension.form' => 'getGenemu_Twig_Extension_FormService',
            'http_kernel' => 'getHttpKernelService',
            'jms_aop.interceptor_loader' => 'getJmsAop_InterceptorLoaderService',
            'jms_aop.pointcut_container' => 'getJmsAop_PointcutContainerService',
            'jms_di_extra.controller_resolver' => 'getJmsDiExtra_ControllerResolverService',
            'jms_di_extra.metadata.converter' => 'getJmsDiExtra_Metadata_ConverterService',
            'jms_di_extra.metadata.metadata_factory' => 'getJmsDiExtra_Metadata_MetadataFactoryService',
            'jms_di_extra.metadata_driver' => 'getJmsDiExtra_MetadataDriverService',
            'kernel' => 'getKernelService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_paginator' => 'getKnpPaginatorService',
            'knp_paginator.helper.processor' => 'getKnpPaginator_Helper_ProcessorService',
            'knp_paginator.subscriber.filtration' => 'getKnpPaginator_Subscriber_FiltrationService',
            'knp_paginator.subscriber.paginate' => 'getKnpPaginator_Subscriber_PaginateService',
            'knp_paginator.subscriber.sliding_pagination' => 'getKnpPaginator_Subscriber_SlidingPaginationService',
            'knp_paginator.subscriber.sortable' => 'getKnpPaginator_Subscriber_SortableService',
            'knp_paginator.templating.helper.pagination' => 'getKnpPaginator_Templating_Helper_PaginationService',
            'knp_paginator.twig.extension.pagination' => 'getKnpPaginator_Twig_Extension_PaginationService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.firephp' => 'getMonolog_Handler_FirephpService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.deprecation' => 'getMonolog_Logger_DeprecationService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.emergency' => 'getMonolog_Logger_EmergencyService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'my.facebook.user' => 'getMy_Facebook_UserService',
            'my.main.admin.ads' => 'getMy_Main_Admin_AdsService',
            'my.main.admin.concurs' => 'getMy_Main_Admin_ConcursService',
            'my.main.admin.gallery' => 'getMy_Main_Admin_GalleryService',
            'my.main.admin.horoscop' => 'getMy_Main_Admin_HoroscopService',
            'my.main.admin.interestings' => 'getMy_Main_Admin_InterestingsService',
            'my.main.admin.news' => 'getMy_Main_Admin_NewsService',
            'my.main.admin.realty' => 'getMy_Main_Admin_RealtyService',
            'my.main.admin.slider' => 'getMy_Main_Admin_SliderService',
            'my_user.my_provider' => 'getMyUser_MyProviderService',
            'my_user.registration.form.type' => 'getMyUser_Registration_Form_TypeService',
            'presta_sitemap.dumper' => 'getPrestaSitemap_DumperService',
            'presta_sitemap.eventlistener.route_annotation' => 'getPrestaSitemap_Eventlistener_RouteAnnotationService',
            'presta_sitemap.generator' => 'getPrestaSitemap_GeneratorService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access.method_interceptor' => 'getSecurity_Access_MethodInterceptorService',
            'security.access.pointcut' => 'getSecurity_Access_PointcutService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.context' => 'getSecurity_ContextService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.expressions.compiler' => 'getSecurity_Expressions_CompilerService',
            'security.expressions.handler' => 'getSecurity_Expressions_HandlerService',
            'security.expressions.reverse_interpreter' => 'getSecurity_Expressions_ReverseInterpreterService',
            'security.extra.metadata_driver' => 'getSecurity_Extra_MetadataDriverService',
            'security.extra.metadata_factory' => 'getSecurity_Extra_MetadataFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.admin' => 'getSecurity_Firewall_Map_Context_AdminService',
            'security.firewall.map.context.public' => 'getSecurity_Firewall_Map_Context_PublicService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout.handler.session' => 'getSecurity_Logout_Handler_SessionService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.user.provider.concrete.chain_provider' => 'getSecurity_User_Provider_Concrete_ChainProviderService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.webconfigurator' => 'getSensioDistribution_WebconfiguratorService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService',
            'sonata.admin.builder.orm_datagrid' => 'getSonata_Admin_Builder_OrmDatagridService',
            'sonata.admin.builder.orm_form' => 'getSonata_Admin_Builder_OrmFormService',
            'sonata.admin.builder.orm_list' => 'getSonata_Admin_Builder_OrmListService',
            'sonata.admin.builder.orm_show' => 'getSonata_Admin_Builder_OrmShowService',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService',
            'sonata.admin.form.type.array' => 'getSonata_Admin_Form_Type_ArrayService',
            'sonata.admin.form.type.boolean' => 'getSonata_Admin_Form_Type_BooleanService',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService',
            'sonata.admin.form.type.date_range' => 'getSonata_Admin_Form_Type_DateRangeService',
            'sonata.admin.form.type.datetime_range' => 'getSonata_Admin_Form_Type_DatetimeRangeService',
            'sonata.admin.form.type.equal' => 'getSonata_Admin_Form_Type_EqualService',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService',
            'sonata.admin.form.type.translatable_choice' => 'getSonata_Admin_Form_Type_TranslatableChoiceService',
            'sonata.admin.guesser.orm_datagrid' => 'getSonata_Admin_Guesser_OrmDatagridService',
            'sonata.admin.guesser.orm_datagrid_chain' => 'getSonata_Admin_Guesser_OrmDatagridChainService',
            'sonata.admin.guesser.orm_list' => 'getSonata_Admin_Guesser_OrmListService',
            'sonata.admin.guesser.orm_list_chain' => 'getSonata_Admin_Guesser_OrmListChainService',
            'sonata.admin.guesser.orm_show' => 'getSonata_Admin_Guesser_OrmShowService',
            'sonata.admin.guesser.orm_show_chain' => 'getSonata_Admin_Guesser_OrmShowChainService',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService',
            'sonata.admin.security.handler' => 'getSonata_Admin_Security_HandlerService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.twig.extension.text' => 'getSonata_Admin_Twig_Extension_TextService',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.cache.handler.noop' => 'getSonata_Block_Cache_Handler_NoopService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.form.type.block' => 'getSonata_Block_Form_Type_BlockService',
            'sonata.block.loader.chain' => 'getSonata_Block_Loader_ChainService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'sonata.cache.invalidation.simple' => 'getSonata_Cache_Invalidation_SimpleService',
            'sonata.cache.manager' => 'getSonata_Cache_ManagerService',
            'sonata.cache.model_identifier' => 'getSonata_Cache_ModelIdentifierService',
            'sonata.cache.noop' => 'getSonata_Cache_NoopService',
            'sonata.cache.orm.event_subscriber' => 'getSonata_Cache_Orm_EventSubscriberService',
            'sonata.cache.orm.event_subscriber.default' => 'getSonata_Cache_Orm_EventSubscriber_DefaultService',
            'sonata.cache.recorder' => 'getSonata_Cache_RecorderService',
            'sonata.easy_extends.doctrine.mapper' => 'getSonata_EasyExtends_Doctrine_MapperService',
            'sonata.easy_extends.generator.bundle' => 'getSonata_EasyExtends_Generator_BundleService',
            'sonata.easy_extends.generator.odm' => 'getSonata_EasyExtends_Generator_OdmService',
            'sonata.easy_extends.generator.orm' => 'getSonata_EasyExtends_Generator_OrmService',
            'sonata.easy_extends.generator.phpcr' => 'getSonata_EasyExtends_Generator_PhpcrService',
            'sonata.media.adapter.filesystem.local' => 'getSonata_Media_Adapter_Filesystem_LocalService',
            'sonata.media.adapter.image.gd' => 'getSonata_Media_Adapter_Image_GdService',
            'sonata.media.adapter.image.gmagick' => 'getSonata_Media_Adapter_Image_GmagickService',
            'sonata.media.adapter.image.imagick' => 'getSonata_Media_Adapter_Image_ImagickService',
            'sonata.media.adapter.service.s3' => 'getSonata_Media_Adapter_Service_S3Service',
            'sonata.media.admin.gallery' => 'getSonata_Media_Admin_GalleryService',
            'sonata.media.admin.gallery_has_media' => 'getSonata_Media_Admin_GalleryHasMediaService',
            'sonata.media.admin.media' => 'getSonata_Media_Admin_MediaService',
            'sonata.media.admin.media.manager' => 'getSonata_Media_Admin_Media_ManagerService',
            'sonata.media.block.feature_media' => 'getSonata_Media_Block_FeatureMediaService',
            'sonata.media.block.gallery' => 'getSonata_Media_Block_GalleryService',
            'sonata.media.block.media' => 'getSonata_Media_Block_MediaService',
            'sonata.media.buzz.browser' => 'getSonata_Media_Buzz_BrowserService',
            'sonata.media.buzz.connector.curl' => 'getSonata_Media_Buzz_Connector_CurlService',
            'sonata.media.buzz.connector.file_get_contents' => 'getSonata_Media_Buzz_Connector_FileGetContentsService',
            'sonata.media.cdn.server' => 'getSonata_Media_Cdn_ServerService',
            'sonata.media.doctrine.event_subscriber' => 'getSonata_Media_Doctrine_EventSubscriberService',
            'sonata.media.filesystem.local' => 'getSonata_Media_Filesystem_LocalService',
            'sonata.media.form.type.media' => 'getSonata_Media_Form_Type_MediaService',
            'sonata.media.generator.default' => 'getSonata_Media_Generator_DefaultService',
            'sonata.media.manager.gallery' => 'getSonata_Media_Manager_GalleryService',
            'sonata.media.manager.media' => 'getSonata_Media_Manager_MediaService',
            'sonata.media.metadata.amazon' => 'getSonata_Media_Metadata_AmazonService',
            'sonata.media.metadata.noop' => 'getSonata_Media_Metadata_NoopService',
            'sonata.media.metadata.proxy' => 'getSonata_Media_Metadata_ProxyService',
            'sonata.media.pool' => 'getSonata_Media_PoolService',
            'sonata.media.provider.dailymotion' => 'getSonata_Media_Provider_DailymotionService',
            'sonata.media.provider.file' => 'getSonata_Media_Provider_FileService',
            'sonata.media.provider.image' => 'getSonata_Media_Provider_ImageService',
            'sonata.media.provider.vimeo' => 'getSonata_Media_Provider_VimeoService',
            'sonata.media.provider.youtube' => 'getSonata_Media_Provider_YoutubeService',
            'sonata.media.resizer.simple' => 'getSonata_Media_Resizer_SimpleService',
            'sonata.media.resizer.square' => 'getSonata_Media_Resizer_SquareService',
            'sonata.media.security.connected_strategy' => 'getSonata_Media_Security_ConnectedStrategyService',
            'sonata.media.security.forbidden_strategy' => 'getSonata_Media_Security_ForbiddenStrategyService',
            'sonata.media.security.public_strategy' => 'getSonata_Media_Security_PublicStrategyService',
            'sonata.media.security.superadmin_strategy' => 'getSonata_Media_Security_SuperadminStrategyService',
            'sonata.media.thumbnail.format' => 'getSonata_Media_Thumbnail_FormatService',
            'sonata.media.twig.extension' => 'getSonata_Media_Twig_ExtensionService',
            'sonata.media.validator.format' => 'getSonata_Media_Validator_FormatService',
            'sonata.user.admin.group' => 'getSonata_User_Admin_GroupService',
            'sonata.user.admin.user' => 'getSonata_User_Admin_UserService',
            'sonata.user.authentication.form_handler' => 'getSonata_User_Authentication_FormHandlerService',
            'sonata.user.block.account' => 'getSonata_User_Block_AccountService',
            'sonata.user.block.menu' => 'getSonata_User_Block_MenuService',
            'sonata.user.editable_role_builder' => 'getSonata_User_EditableRoleBuilderService',
            'sonata.user.form.gender_list' => 'getSonata_User_Form_GenderListService',
            'sonata.user.form.type.security_roles' => 'getSonata_User_Form_Type_SecurityRolesService',
            'sonata.user.profile.form' => 'getSonata_User_Profile_FormService',
            'sonata.user.profile.form.handler' => 'getSonata_User_Profile_Form_HandlerService',
            'sonata.user.profile.form.type' => 'getSonata_User_Profile_Form_TypeService',
            'sonata.user.profile.menu_builder' => 'getSonata_User_Profile_MenuBuilderService',
            'sonata.user.twig.global' => 'getSonata_User_Twig_GlobalService',
            'stof_doctrine_extensions.event_listener.locale' => 'getStofDoctrineExtensions_EventListener_LocaleService',
            'stof_doctrine_extensions.listener.translatable' => 'getStofDoctrineExtensions_Listener_TranslatableService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.asset.package_factory' => 'getTemplating_Asset_PackageFactoryService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'trsteel_ckeditor.form.type' => 'getTrsteelCkeditor_Form_TypeService',
            'trsteel_ckeditor.transformer.strip_comments' => 'getTrsteelCkeditor_Transformer_StripCommentsService',
            'trsteel_ckeditor.transformer.strip_css' => 'getTrsteelCkeditor_Transformer_StripCssService',
            'trsteel_ckeditor.transformer.strip_js' => 'getTrsteelCkeditor_Transformer_StripJsService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.stfalcon_tinymce' => 'getTwig_Extension_StfalconTinymceService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.mapping.class_metadata_factory' => 'getValidator_Mapping_ClassMetadataFactoryService',
            'validator.validator_factory' => 'getValidator_ValidatorFactoryService',
            'watermark' => 'getWatermarkService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->aliases = array(
            'a2lix_translation_form.manager_registry' => 'doctrine',
            'database_connection' => 'doctrine.dbal.default_connection',
            'debug.templating.engine.twig' => 'templating',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'facebook' => 'fos_facebook.api',
            'fos_user.change_password.form.handler' => 'fos_user.change_password.form.handler.default',
            'fos_user.profile.form.handler' => 'sonata.user.authentication.form_handler',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'mailer' => 'swiftmailer.mailer.default',
            'sensio.distribution.webconfigurator' => 'sensio_distribution.webconfigurator',
            'session.storage' => 'session.storage.native',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'sonata.media.entity_manager' => 'doctrine.orm.default_entity_manager',
            'sonata.user.authentication.form' => 'fos_user.profile.form',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'translator' => 'translator.default',
        );
    }

    /**
     * Gets the 'a2lix_translation_form.default.listener.translations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return A2lix\TranslationFormBundle\Form\EventListener\TranslationsListener A A2lix\TranslationFormBundle\Form\EventListener\TranslationsListener instance.
     */
    protected function getA2lixTranslationForm_Default_Listener_TranslationsService()
    {
        return $this->services['a2lix_translation_form.default.listener.translations'] = new \A2lix\TranslationFormBundle\Form\EventListener\TranslationsListener($this->get('a2lix_translation_form.default.service.translation'));
    }

    /**
     * Gets the 'a2lix_translation_form.default.listener.translationsforms' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return A2lix\TranslationFormBundle\Form\EventListener\TranslationsFormsListener A A2lix\TranslationFormBundle\Form\EventListener\TranslationsFormsListener instance.
     */
    protected function getA2lixTranslationForm_Default_Listener_TranslationsformsService()
    {
        return $this->services['a2lix_translation_form.default.listener.translationsforms'] = new \A2lix\TranslationFormBundle\Form\EventListener\TranslationsFormsListener();
    }

    /**
     * Gets the 'a2lix_translation_form.default.service.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return A2lix\TranslationFormBundle\TranslationForm\TranslationForm A A2lix\TranslationFormBundle\TranslationForm\TranslationForm instance.
     */
    protected function getA2lixTranslationForm_Default_Service_TranslationService()
    {
        return $this->services['a2lix_translation_form.default.service.translation'] = new \A2lix\TranslationFormBundle\TranslationForm\TranslationForm($this->get('form.registry'), $this->get('doctrine'));
    }

    /**
     * Gets the 'a2lix_translation_form.default.type.translations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return A2lix\TranslationFormBundle\Form\Type\TranslationsType A A2lix\TranslationFormBundle\Form\Type\TranslationsType instance.
     */
    protected function getA2lixTranslationForm_Default_Type_TranslationsService()
    {
        return $this->services['a2lix_translation_form.default.type.translations'] = new \A2lix\TranslationFormBundle\Form\Type\TranslationsType($this->get('a2lix_translation_form.default.listener.translations'), array(0 => 'en'), 'en', false);
    }

    /**
     * Gets the 'a2lix_translation_form.default.type.translationsfields' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return A2lix\TranslationFormBundle\Form\Type\TranslationsFieldsType A A2lix\TranslationFormBundle\Form\Type\TranslationsFieldsType instance.
     */
    protected function getA2lixTranslationForm_Default_Type_TranslationsfieldsService()
    {
        return $this->services['a2lix_translation_form.default.type.translationsfields'] = new \A2lix\TranslationFormBundle\Form\Type\TranslationsFieldsType();
    }

    /**
     * Gets the 'a2lix_translation_form.default.type.translationsforms' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return A2lix\TranslationFormBundle\Form\Type\TranslationsFormsType A A2lix\TranslationFormBundle\Form\Type\TranslationsFormsType instance.
     */
    protected function getA2lixTranslationForm_Default_Type_TranslationsformsService()
    {
        return $this->services['a2lix_translation_form.default.type.translationsforms'] = new \A2lix\TranslationFormBundle\Form\Type\TranslationsFormsType($this->get('a2lix_translation_form.default.service.translation'), $this->get('a2lix_translation_form.default.listener.translationsforms'), array(0 => 'en'), 'en', false);
    }

    /**
     * Gets the 'a2lix_translation_form.default.type.translationslocalesselector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return A2lix\TranslationFormBundle\Form\Type\TranslationsLocalesSelectorType A A2lix\TranslationFormBundle\Form\Type\TranslationsLocalesSelectorType instance.
     */
    protected function getA2lixTranslationForm_Default_Type_TranslationslocalesselectorService()
    {
        return $this->services['a2lix_translation_form.default.type.translationslocalesselector'] = new \A2lix\TranslationFormBundle\Form\Type\TranslationsLocalesSelectorType(array(0 => 'en'), 'en');
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Annotations\FileCacheReader A Doctrine\Common\Annotations\FileCacheReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), '/var/www/mynet/app/cache/de_/annotations', true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('/var/www/mynet/app/cache/de_/assetic/config'), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MYMainBundle', '/var/www/mynet/app/Resources/MYMainBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MYMainBundle', '/var/www/mynet/src/MY/MainBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MYUserBundle', '/var/www/mynet/app/Resources/MYUserBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MYUserBundle', '/var/www/mynet/src/MY/UserBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', '/var/www/mynet/app/Resources/FOSUserBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/var/www/mynet/app/Resources/TwigBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', '/var/www/mynet/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter.yui_css' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\Yui\CssCompressorFilter A Assetic\Filter\Yui\CssCompressorFilter instance.
     */
    protected function getAssetic_Filter_YuiCssService()
    {
        $this->services['assetic.filter.yui_css'] = $instance = new \Assetic\Filter\Yui\CssCompressorFilter('/var/www/mynet/app/Resources/java/yuicompressor-2.4.7.jar', '/usr/bin/java');

        $instance->setCharset('UTF-8');
        $instance->setTimeout(NULL);
        $instance->setStackSize(NULL);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.yui_js' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\Yui\JsCompressorFilter A Assetic\Filter\Yui\JsCompressorFilter instance.
     */
    protected function getAssetic_Filter_YuiJsService()
    {
        $this->services['assetic.filter.yui_js'] = $instance = new \Assetic\Filter\Yui\JsCompressorFilter('/var/www/mynet/app/Resources/java/yuicompressor-2.4.7.jar', '/usr/bin/java');

        $instance->setCharset('UTF-8');
        $instance->setTimeout(NULL);
        $instance->setStackSize(NULL);
        $instance->setNomunge(NULL);
        $instance->setPreserveSemi(NULL);
        $instance->setDisableOptimizations(NULL);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite', 'yui_css' => 'assetic.filter.yui_css', 'yui_js' => 'assetic.filter.yui_js'));
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance.
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, '/var/www/mynet/app/Resources');

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 5 => new \JMS\DiExtraBundle\HttpKernel\ControllerInjectorsWarmer($a, $this->get('jms_di_extra.controller_resolver'), array())));
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance.
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance.
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver($this->get('jms_di_extra.controller_resolver'), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.deprecation_logger_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener A Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener instance.
     */
    protected function getDebug_DeprecationLoggerListenerService()
    {
        return $this->services['debug.deprecation_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('deprecation', $this->get('monolog.logger.deprecation', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'debug.emergency_logger_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener A Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener instance.
     */
    protected function getDebug_EmergencyLoggerListenerService()
    {
        return $this->services['debug.emergency_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('emergency', $this->get('monolog.logger.emergency', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance.
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher($this->get('event_dispatcher'), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setProfiler($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance.
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'debug.templating.engine.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine A Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine instance.
     */
    protected function getDebug_Templating_Engine_PhpService()
    {
        $this->services['debug.templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.static', 'sonata_block' => 'sonata.block.templating.helper', 'knp_pagination' => 'knp_paginator.templating.helper.pagination', 'facebook' => 'fos_facebook.helper'));

        return $instance;
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance.
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array('json' => array('class' => 'Sonata\\Doctrine\\Types\\JsonType', 'commented' => true)));
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\DBAL\Logging\LoggerChain();
        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $b->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $c = new \Doctrine\DBAL\Configuration();
        $c->setSQLLogger($b);

        $d = new \Gedmo\Sluggable\SluggableListener();
        $d->setAnnotationReader($a);

        $e = new \Gedmo\Timestampable\TimestampableListener();
        $e->setAnnotationReader($a);

        $f = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $f->addEventSubscriber($this->get('sonata.cache.orm.event_subscriber'));
        $f->addEventSubscriber($this->get('sonata.easy_extends.doctrine.mapper'));
        $f->addEventSubscriber($d);
        $f->addEventSubscriber($this->get('sonata.media.doctrine.event_subscriber'));
        $f->addEventSubscriber($e);
        $f->addEventSubscriber(new \FOS\UserBundle\Entity\UserListener($this));
        $f->addEventSubscriber($this->get('stof_doctrine_extensions.listener.translatable'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('dbname' => 'my', 'host' => '127.0.0.1', 'port' => NULL, 'user' => 'root', 'password' => 'root', 'charset' => 'UTF8', 'driver' => 'pdo_mysql', 'driverOptions' => array()), $c, $f, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return EntityManager5294ea04cc28b_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager A EntityManager5294ea04cc28b_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        require_once '/var/www/mynet/app/cache/de_/jms_diextra/doctrine/EntityManager_5294ea04cc28b.php';

        $a = $this->get('annotation_reader');

        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_72afc78cf2f2cd46b62abcf7ec9a196f');

        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_72afc78cf2f2cd46b62abcf7ec9a196f');

        $d = new \Doctrine\Common\Cache\ArrayCache();
        $d->setNamespace('sf2orm_default_72afc78cf2f2cd46b62abcf7ec9a196f');

        $e = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array('/var/www/mynet/vendor/sonata-project/media-bundle/Sonata/MediaBundle/Resources/config/doctrine' => 'Sonata\\MediaBundle\\Entity', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/config/doctrine' => 'Sonata\\UserBundle\\Entity', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/doctrine' => 'FOS\\UserBundle\\Entity'));
        $e->setGlobalBasename('mapping');

        $f = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => '/var/www/mynet/src/MY/MainBundle/Entity', 1 => '/var/www/mynet/src/MY/UserBundle/Entity', 2 => '/var/www/mynet/src/MY/MediaBundle/Entity'));

        $g = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $g->addDriver($e, 'Sonata\\MediaBundle\\Entity');
        $g->addDriver($e, 'Sonata\\UserBundle\\Entity');
        $g->addDriver($e, 'FOS\\UserBundle\\Entity');
        $g->addDriver($f, 'MY\\MainBundle\\Entity');
        $g->addDriver($f, 'MY\\UserBundle\\Entity');
        $g->addDriver($f, 'MY\\MediaBundle\\Entity');

        $h = new \Doctrine\ORM\Configuration();
        $h->setEntityNamespaces(array('SonataMediaBundle' => 'Sonata\\MediaBundle\\Entity', 'SonataUserBundle' => 'Sonata\\UserBundle\\Entity', 'FOSUserBundle' => 'FOS\\UserBundle\\Entity', 'MYMainBundle' => 'MY\\MainBundle\\Entity', 'MYUserBundle' => 'MY\\UserBundle\\Entity', 'MYMediaBundle' => 'MY\\MediaBundle\\Entity'));
        $h->setMetadataCacheImpl($b);
        $h->setQueryCacheImpl($c);
        $h->setResultCacheImpl($d);
        $h->setMetadataDriverImpl($g);
        $h->setProxyDir('/var/www/mynet/app/cache/de_/doctrine/orm/Proxies');
        $h->setProxyNamespace('Proxies');
        $h->setAutoGenerateProxyClasses(true);
        $h->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $h->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $h->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());

        $i = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $h);
        $this->get('doctrine.orm.default_manager_configurator')->configure($i);

        return $this->services['doctrine.orm.default_entity_manager'] = new \EntityManager5294ea04cc28b_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager($i, $this);
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance.
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance.
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance.
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance.
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.paginate', 1 => 'before'), 0);
        $instance->addListenerService('knp_pager.pagination', array(0 => 'knp_paginator.subscriber.paginate', 1 => 'pagination'), 0);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.sortable', 1 => 'before'), 1);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.filtration', 1 => 'before'), 1);
        $instance->addListenerService('knp_pager.pagination', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'pagination'), 1);
        $instance->addListenerService('presta_sitemap.populate', array(0 => 'presta_sitemap.eventlistener.route_annotation', 1 => 'populateSitemap'));
        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'monolog.handler.firephp', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sonata.block.cache.handler.default', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'fos_user.security.interactive_login_listener', 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'onKernelRequest'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('debug.emergency_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('debug.deprecation_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\CacheListener');
        $instance->addSubscriberService('stof_doctrine_extensions.event_listener.locale', 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), '/var/www/mynet/app/Resources');
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider A Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider instance.
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider($this->get('session'), 'ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance.
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance.
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'sonata_block_service_choice' => 'sonata.block.form.type.block', 'sonata_type_admin' => 'sonata.admin.form.type.admin', 'sonata_type_collection' => 'sonata.admin.form.type.collection', 'sonata_type_model' => 'sonata.admin.form.type.model_choice', 'sonata_type_model_list' => 'sonata.admin.form.type.model_list', 'sonata_type_model_reference' => 'sonata.admin.form.type.model_reference', 'sonata_type_model_hidden' => 'sonata.admin.form.type.model_hidden', 'sonata_type_immutable_array' => 'sonata.admin.form.type.array', 'sonata_type_boolean' => 'sonata.admin.form.type.boolean', 'sonata_type_translatable_choice' => 'sonata.admin.form.type.translatable_choice', 'sonata_type_date_range' => 'sonata.admin.form.type.date_range', 'sonata_type_datetime_range' => 'sonata.admin.form.type.datetime_range', 'sonata_type_equal' => 'sonata.admin.form.type.equal', 'sonata_type_filter_number' => 'sonata.admin.form.filter.type.number', 'sonata_type_filter_choice' => 'sonata.admin.form.filter.type.choice', 'sonata_type_filter_default' => 'sonata.admin.form.filter.type.default', 'sonata_type_filter_date' => 'sonata.admin.form.filter.type.date', 'sonata_type_filter_date_range' => 'sonata.admin.form.filter.type.daterange', 'sonata_type_filter_datetime' => 'sonata.admin.form.filter.type.datetime', 'sonata_type_filter_datetime_range' => 'sonata.admin.form.filter.type.datetime_range', 'sonata_media_type' => 'sonata.media.form.type.media', 'sonata_security_roles' => 'sonata.user.form.type.security_roles', 'sonata_user_profile' => 'sonata.user.profile.form.type', 'sonata_user_gender' => 'sonata.user.form.gender_list', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'fos_user_group' => 'fos_user.group.form.type', 'a2lix_translations' => 'a2lix_translation_form.default.type.translations', 'a2lix_translationsFields' => 'a2lix_translation_form.default.type.translationsfields', 'a2lix_translationsForms' => 'a2lix_translation_form.default.type.translationsforms', 'a2lix_translationsLocalesSelector' => 'a2lix_translation_form.default.type.translationslocalesselector', 'ckeditor' => 'trsteel_ckeditor.form.type', 'genemu_recaptcha' => 'genemu.form.core.type.recaptcha', 'genemu_captcha' => 'genemu.form.core.type.captcha', 'genemu_plain' => 'genemu.form.core.type.plain', 'genemu_tinymce' => 'genemu.form.core.type.tinymce', 'genemu_ajaxmodel' => 'genemu.form.model.type.ajaxmodel', 'genemu_jquerycolor' => 'genemu.form.jquery.type.color', 'genemu_jquerydate' => 'genemu.form.jquery.type.date', 'genemu_jqueryfile' => 'genemu.form.jquery.type.file', 'genemu_jquerygeolocation' => 'genemu.form.jquery.type.geolocation', 'genemu_jqueryimage' => 'genemu.form.jquery.type.image', 'genemu_jqueryrating' => 'genemu.form.jquery.type.rating', 'genemu_jqueryslider' => 'genemu.form.jquery.type.slider', 'genemu_ajaxentity' => 'genemu.form.entity.type.ajaxentity', 'genemu_jquerychosen_choice' => 'genemu.form.jquery.type.chosen.choice', 'genemu_jquerychosen_language' => 'genemu.form.jquery.type.chosen.language', 'genemu_jquerychosen_country' => 'genemu.form.jquery.type.chosen.country', 'genemu_jquerychosen_timezone' => 'genemu.form.jquery.type.chosen.timezone', 'genemu_jquerychosen_locale' => 'genemu.form.jquery.type.chosen.locale', 'genemu_jquerychosen_entity' => 'genemu.form.jquery.type.chosen.entity', 'genemu_jquerychosen_document' => 'genemu.form.jquery.type.chosen.document', 'genemu_jquerychosen_model' => 'genemu.form.jquery.type.chosen.model', 'genemu_jquerychosen_currency' => 'genemu.form.jquery.type.chosen.currency', 'genemu_jqueryautocompleter_choice' => 'genemu.form.jquery.type.autocompleter.choice', 'genemu_jqueryautocompleter_language' => 'genemu.form.jquery.type.autocompleter.language', 'genemu_jqueryautocompleter_country' => 'genemu.form.jquery.type.autocompleter.country', 'genemu_jqueryautocompleter_timezone' => 'genemu.form.jquery.type.autocompleter.timezone', 'genemu_jqueryautocompleter_locale' => 'genemu.form.jquery.type.autocompleter.locale', 'genemu_jqueryautocompleter_entity' => 'genemu.form.jquery.type.autocompleter.entity', 'genemu_jqueryautocompleter_document' => 'genemu.form.jquery.type.autocompleter.document', 'genemu_jqueryautocompleter_model' => 'genemu.form.jquery.type.autocompleter.model', 'genemu_jqueryautocompleter_currency' => 'genemu.form.jquery.type.autocompleter.currency', 'genemu_jquerytokeninput_choice' => 'genemu.form.jquery.type.tokeninput.choice', 'genemu_jquerytokeninput_language' => 'genemu.form.jquery.type.tokeninput.language', 'genemu_jquerytokeninput_country' => 'genemu.form.jquery.type.tokeninput.country', 'genemu_jquerytokeninput_timezone' => 'genemu.form.jquery.type.tokeninput.timezone', 'genemu_jquerytokeninput_locale' => 'genemu.form.jquery.type.tokeninput.locale', 'genemu_jquerytokeninput_entity' => 'genemu.form.jquery.type.tokeninput.entity', 'genemu_jquerytokeninput_document' => 'genemu.form.jquery.type.tokeninput.document', 'genemu_jquerytokeninput_model' => 'genemu.form.jquery.type.tokeninput.model', 'genemu_jquerytokeninput_currency' => 'genemu.form.jquery.type.tokeninput.currency', 'my_user_registration' => 'my_user.registration.form.type'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'sonata.admin.form.extension.field'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\ResolvedFormTypeFactory A Symfony\Component\Form\ResolvedFormTypeFactory instance.
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance.
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance.
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance.
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance.
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance.
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance.
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance.
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance.
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance.
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance.
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance.
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance.
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance.
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance.
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance.
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance.
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance.
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance.
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance.
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance.
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance.
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance.
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance.
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance.
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance.
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance.
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance.
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance.
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance.
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance.
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance.
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance.
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token', $this->get('translator.default'), 'validators');
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance.
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension();
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }

    /**
     * Gets the 'fos_facebook.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\FacebookBundle\Facebook\FacebookSessionPersistence A FOS\FacebookBundle\Facebook\FacebookSessionPersistence instance.
     */
    protected function getFosFacebook_ApiService()
    {
        return $this->services['fos_facebook.api'] = new \FOS\FacebookBundle\Facebook\FacebookSessionPersistence(array('appId' => 'sovorel.am', 'secret' => 'sovorel.am', 'cookie' => true, 'domain' => NULL), $this->get('session'));
    }

    /**
     * Gets the 'fos_facebook.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\FacebookBundle\Templating\Helper\FacebookHelper A FOS\FacebookBundle\Templating\Helper\FacebookHelper instance.
     */
    protected function getFosFacebook_HelperService()
    {
        return $this->services['fos_facebook.helper'] = new \FOS\FacebookBundle\Templating\Helper\FacebookHelper($this->get('templating'), $this->get('fos_facebook.api'), $this->get('router'), true, 'en_US', array(0 => 'email', 1 => 'user_birthday', 2 => 'user_location'));
    }

    /**
     * Gets the 'fos_facebook.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\FacebookBundle\Twig\Extension\FacebookExtension A FOS\FacebookBundle\Twig\Extension\FacebookExtension instance.
     */
    protected function getFosFacebook_TwigService()
    {
        return $this->services['fos_facebook.twig'] = new \FOS\FacebookBundle\Twig\Extension\FacebookExtension($this);
    }

    /**
     * Gets the 'fos_user.change_password.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_ChangePassword_FormService()
    {
        return $this->services['fos_user.change_password.form'] = $this->get('form.factory')->createNamed('fos_user_change_password_form', 'fos_user_change_password', NULL, array('validation_groups' => array(0 => 'ChangePassword')));
    }

    /**
     * Gets the 'fos_user.change_password.form.handler.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Handler\ChangePasswordFormHandler A FOS\UserBundle\Form\Handler\ChangePasswordFormHandler instance.
     * 
     * @throws InactiveScopeException when the 'fos_user.change_password.form.handler.default' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_ChangePassword_Form_Handler_DefaultService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.change_password.form.handler.default', 'request');
        }

        return $this->services['fos_user.change_password.form.handler.default'] = $this->scopedServices['request']['fos_user.change_password.form.handler.default'] = new \FOS\UserBundle\Form\Handler\ChangePasswordFormHandler($this->get('fos_user.change_password.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.change_password.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ChangePasswordFormType A FOS\UserBundle\Form\Type\ChangePasswordFormType instance.
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType();
    }

    /**
     * Gets the 'fos_user.group.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_Group_FormService()
    {
        return $this->services['fos_user.group.form'] = $this->get('form.factory')->createNamed('fos_user_group_form', 'fos_user_group', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_user.group.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Handler\GroupFormHandler A FOS\UserBundle\Form\Handler\GroupFormHandler instance.
     * 
     * @throws InactiveScopeException when the 'fos_user.group.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_Group_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.group.form.handler', 'request');
        }

        return $this->services['fos_user.group.form.handler'] = $this->scopedServices['request']['fos_user.group.form.handler'] = new \FOS\UserBundle\Form\Handler\GroupFormHandler($this->get('fos_user.group.form'), $this->get('request'), $this->get('fos_user.group_manager'));
    }

    /**
     * Gets the 'fos_user.group.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\GroupFormType A FOS\UserBundle\Form\Type\GroupFormType instance.
     */
    protected function getFosUser_Group_Form_TypeService()
    {
        return $this->services['fos_user.group.form.type'] = new \FOS\UserBundle\Form\Type\GroupFormType('MY\\UserBundle\\Entity\\Group');
    }

    /**
     * Gets the 'fos_user.group_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Doctrine\GroupManager A FOS\UserBundle\Doctrine\GroupManager instance.
     */
    protected function getFosUser_GroupManagerService()
    {
        return $this->services['fos_user.group_manager'] = new \FOS\UserBundle\Doctrine\GroupManager($this->get('fos_user.entity_manager'), 'MY\\UserBundle\\Entity\\Group');
    }

    /**
     * Gets the 'fos_user.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Mailer\Mailer A FOS\UserBundle\Mailer\Mailer instance.
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'FOSUserBundle:Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('webmaster@example.com' => 'webmaster'), 'resetting' => array('...' => '...'))));
    }

    /**
     * Gets the 'fos_user.profile.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_Profile_FormService()
    {
        return $this->services['fos_user.profile.form'] = $this->get('form.factory')->createNamed('fos_user_profile_form', 'fos_user_profile', NULL, array('validation_groups' => array(0 => 'Profile')));
    }

    /**
     * Gets the 'fos_user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ProfileFormType A FOS\UserBundle\Form\Type\ProfileFormType instance.
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('MY\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.registration.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_Registration_FormService()
    {
        return $this->services['fos_user.registration.form'] = $this->get('form.factory')->createNamed('fos_user_registration_form', 'my_user_registration', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_user.registration.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Handler\RegistrationFormHandler A FOS\UserBundle\Form\Handler\RegistrationFormHandler instance.
     * 
     * @throws InactiveScopeException when the 'fos_user.registration.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_Registration_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.registration.form.handler', 'request');
        }

        return $this->services['fos_user.registration.form.handler'] = $this->scopedServices['request']['fos_user.registration.form.handler'] = new \FOS\UserBundle\Form\Handler\RegistrationFormHandler($this->get('fos_user.registration.form'), $this->get('request'), $this->get('fos_user.user_manager'), $this->get('fos_user.mailer'), $this->get('fos_user.util.token_generator'));
    }

    /**
     * Gets the 'fos_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\RegistrationFormType A FOS\UserBundle\Form\Type\RegistrationFormType instance.
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('MY\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.resetting.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_Resetting_FormService()
    {
        return $this->services['fos_user.resetting.form'] = $this->get('form.factory')->createNamed('fos_user_resetting_form', 'fos_user_resetting', NULL, array('validation_groups' => array(0 => 'ResetPassword')));
    }

    /**
     * Gets the 'fos_user.resetting.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Handler\ResettingFormHandler A FOS\UserBundle\Form\Handler\ResettingFormHandler instance.
     * 
     * @throws InactiveScopeException when the 'fos_user.resetting.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_Resetting_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.resetting.form.handler', 'request');
        }

        return $this->services['fos_user.resetting.form.handler'] = $this->scopedServices['request']['fos_user.resetting.form.handler'] = new \FOS\UserBundle\Form\Handler\ResettingFormHandler($this->get('fos_user.resetting.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.resetting.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ResettingFormType A FOS\UserBundle\Form\Type\ResettingFormType instance.
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType();
    }

    /**
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Security\InteractiveLoginListener A FOS\UserBundle\Security\InteractiveLoginListener instance.
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\Security\InteractiveLoginListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.security.login_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Security\LoginManager A FOS\UserBundle\Security\LoginManager instance.
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.context'), $this->get('security.user_checker'), $this->get('security.authentication.session_strategy'), $this);
    }

    /**
     * Gets the 'fos_user.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Doctrine\UserManager A FOS\UserBundle\Doctrine\UserManager instance.
     */
    protected function getFosUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('fos_user.entity_manager'), 'MY\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.username_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\UsernameFormType A FOS\UserBundle\Form\Type\UsernameFormType instance.
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }

    /**
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance.
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the 'fos_user.util.token_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\TokenGenerator A FOS\UserBundle\Util\TokenGenerator instance.
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_user.util.user_manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\UserManipulator A FOS\UserBundle\Util\UserManipulator instance.
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Fragment\FragmentHandler A Symfony\Component\HttpKernel\Fragment\FragmentHandler instance.
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), true);

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer A Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer instance.
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance.
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'genemu.form.core.type.captcha' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\Core\Type\CaptchaType A Genemu\Bundle\FormBundle\Form\Core\Type\CaptchaType instance.
     */
    protected function getGenemu_Form_Core_Type_CaptchaService()
    {
        return $this->services['genemu.form.core.type.captcha'] = new \Genemu\Bundle\FormBundle\Form\Core\Type\CaptchaType($this->get('genemu.gd.captcha'), array('enabled' => true, 'driver' => 'gd', 'width' => 100, 'height' => 30, 'length' => 4, 'format' => 'png', 'chars' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9), 'font_size' => 18, 'grayscale' => false, 'font_color' => array(0 => '252525', 1 => '8B8787', 2 => '550707', 3 => '3526E6', 4 => '88531E'), 'fonts' => array(0 => '/var/www/mynet/app/../web/bundles/genemuform/fonts/akbar.ttf', 1 => '/var/www/mynet/app/../web/bundles/genemuform/fonts/brushcut.ttf', 2 => '/var/www/mynet/app/../web/bundles/genemuform/fonts/molten.ttf', 3 => '/var/www/mynet/app/../web/bundles/genemuform/fonts/planetbe.ttf', 4 => '/var/www/mynet/app/../web/bundles/genemuform/fonts/whoobub.ttf'), 'background_color' => 'DDDDDD', 'border_color' => '000000', 'code' => NULL));
    }

    /**
     * Gets the 'genemu.form.core.type.plain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\Core\Type\PlainType A Genemu\Bundle\FormBundle\Form\Core\Type\PlainType instance.
     */
    protected function getGenemu_Form_Core_Type_PlainService()
    {
        return $this->services['genemu.form.core.type.plain'] = new \Genemu\Bundle\FormBundle\Form\Core\Type\PlainType();
    }

    /**
     * Gets the 'genemu.form.core.type.recaptcha' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\Core\Type\ReCaptchaType A Genemu\Bundle\FormBundle\Form\Core\Type\ReCaptchaType instance.
     */
    protected function getGenemu_Form_Core_Type_RecaptchaService()
    {
        return $this->services['genemu.form.core.type.recaptcha'] = new \Genemu\Bundle\FormBundle\Form\Core\Type\ReCaptchaType($this->get('genemu.form.type_recaptcha.validator'), '6LeYWMcSAAAAAFGeUexBltVF25GV_5YT1vduVvS1', 'http://api.recaptcha.net', array());
    }

    /**
     * Gets the 'genemu.form.core.type.tinymce' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\Core\Type\TinymceType A Genemu\Bundle\FormBundle\Form\Core\Type\TinymceType instance.
     */
    protected function getGenemu_Form_Core_Type_TinymceService()
    {
        return $this->services['genemu.form.core.type.tinymce'] = new \Genemu\Bundle\FormBundle\Form\Core\Type\TinymceType(array('theme' => 'advanced'));
    }

    /**
     * Gets the 'genemu.form.entity.type.ajaxentity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\Doctrine\Type\AjaxEntityType A Genemu\Bundle\FormBundle\Form\Doctrine\Type\AjaxEntityType instance.
     */
    protected function getGenemu_Form_Entity_Type_AjaxentityService()
    {
        return $this->services['genemu.form.entity.type.ajaxentity'] = new \Genemu\Bundle\FormBundle\Form\Doctrine\Type\AjaxEntityType($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'genemu.form.jquery.type.autocompleter.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType A Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Autocompleter_ChoiceService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.choice'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('choice');
    }

    /**
     * Gets the 'genemu.form.jquery.type.autocompleter.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType A Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Autocompleter_CountryService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.country'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('country');
    }

    /**
     * Gets the 'genemu.form.jquery.type.autocompleter.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType A Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Autocompleter_CurrencyService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.currency'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('currency');
    }

    /**
     * Gets the 'genemu.form.jquery.type.autocompleter.document' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType A Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Autocompleter_DocumentService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.document'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('document');
    }

    /**
     * Gets the 'genemu.form.jquery.type.autocompleter.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType A Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Autocompleter_EntityService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.entity'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('entity');
    }

    /**
     * Gets the 'genemu.form.jquery.type.autocompleter.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType A Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Autocompleter_LanguageService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.language'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('language');
    }

    /**
     * Gets the 'genemu.form.jquery.type.autocompleter.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType A Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Autocompleter_LocaleService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.locale'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('locale');
    }

    /**
     * Gets the 'genemu.form.jquery.type.autocompleter.model' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType A Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Autocompleter_ModelService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.model'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('model');
    }

    /**
     * Gets the 'genemu.form.jquery.type.autocompleter.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType A Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Autocompleter_TimezoneService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.timezone'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('timezone');
    }

    /**
     * Gets the 'genemu.form.jquery.type.chosen.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType A Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Chosen_ChoiceService()
    {
        return $this->services['genemu.form.jquery.type.chosen.choice'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('choice');
    }

    /**
     * Gets the 'genemu.form.jquery.type.chosen.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType A Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Chosen_CountryService()
    {
        return $this->services['genemu.form.jquery.type.chosen.country'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('country');
    }

    /**
     * Gets the 'genemu.form.jquery.type.chosen.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType A Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Chosen_CurrencyService()
    {
        return $this->services['genemu.form.jquery.type.chosen.currency'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('currency');
    }

    /**
     * Gets the 'genemu.form.jquery.type.chosen.document' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType A Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Chosen_DocumentService()
    {
        return $this->services['genemu.form.jquery.type.chosen.document'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('document');
    }

    /**
     * Gets the 'genemu.form.jquery.type.chosen.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType A Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Chosen_EntityService()
    {
        return $this->services['genemu.form.jquery.type.chosen.entity'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('entity');
    }

    /**
     * Gets the 'genemu.form.jquery.type.chosen.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType A Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Chosen_LanguageService()
    {
        return $this->services['genemu.form.jquery.type.chosen.language'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('language');
    }

    /**
     * Gets the 'genemu.form.jquery.type.chosen.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType A Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Chosen_LocaleService()
    {
        return $this->services['genemu.form.jquery.type.chosen.locale'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('locale');
    }

    /**
     * Gets the 'genemu.form.jquery.type.chosen.model' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType A Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Chosen_ModelService()
    {
        return $this->services['genemu.form.jquery.type.chosen.model'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('model');
    }

    /**
     * Gets the 'genemu.form.jquery.type.chosen.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType A Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Chosen_TimezoneService()
    {
        return $this->services['genemu.form.jquery.type.chosen.timezone'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('timezone');
    }

    /**
     * Gets the 'genemu.form.jquery.type.color' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\ColorType A Genemu\Bundle\FormBundle\Form\JQuery\Type\ColorType instance.
     */
    protected function getGenemu_Form_Jquery_Type_ColorService()
    {
        return $this->services['genemu.form.jquery.type.color'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ColorType(array());
    }

    /**
     * Gets the 'genemu.form.jquery.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\DateType A Genemu\Bundle\FormBundle\Form\JQuery\Type\DateType instance.
     */
    protected function getGenemu_Form_Jquery_Type_DateService()
    {
        return $this->services['genemu.form.jquery.type.date'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\DateType(array());
    }

    /**
     * Gets the 'genemu.form.jquery.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\FileType A Genemu\Bundle\FormBundle\Form\JQuery\Type\FileType instance.
     */
    protected function getGenemu_Form_Jquery_Type_FileService()
    {
        return $this->services['genemu.form.jquery.type.file'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\FileType(array(), '/var/www/mynet/app/../web');
    }

    /**
     * Gets the 'genemu.form.jquery.type.geolocation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\GeolocationType A Genemu\Bundle\FormBundle\Form\JQuery\Type\GeolocationType instance.
     */
    protected function getGenemu_Form_Jquery_Type_GeolocationService()
    {
        return $this->services['genemu.form.jquery.type.geolocation'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\GeolocationType();
    }

    /**
     * Gets the 'genemu.form.jquery.type.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\ImageType A Genemu\Bundle\FormBundle\Form\JQuery\Type\ImageType instance.
     */
    protected function getGenemu_Form_Jquery_Type_ImageService()
    {
        return $this->services['genemu.form.jquery.type.image'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ImageType('', array(), array());
    }

    /**
     * Gets the 'genemu.form.jquery.type.rating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\RatingType A Genemu\Bundle\FormBundle\Form\JQuery\Type\RatingType instance.
     */
    protected function getGenemu_Form_Jquery_Type_RatingService()
    {
        return $this->services['genemu.form.jquery.type.rating'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\RatingType(array());
    }

    /**
     * Gets the 'genemu.form.jquery.type.slider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\SliderType A Genemu\Bundle\FormBundle\Form\JQuery\Type\SliderType instance.
     */
    protected function getGenemu_Form_Jquery_Type_SliderService()
    {
        return $this->services['genemu.form.jquery.type.slider'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\SliderType();
    }

    /**
     * Gets the 'genemu.form.jquery.type.tokeninput.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType A Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Tokeninput_ChoiceService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.choice'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('choice');
    }

    /**
     * Gets the 'genemu.form.jquery.type.tokeninput.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType A Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Tokeninput_CountryService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.country'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('country');
    }

    /**
     * Gets the 'genemu.form.jquery.type.tokeninput.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType A Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Tokeninput_CurrencyService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.currency'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('currency');
    }

    /**
     * Gets the 'genemu.form.jquery.type.tokeninput.document' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType A Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Tokeninput_DocumentService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.document'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('document');
    }

    /**
     * Gets the 'genemu.form.jquery.type.tokeninput.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType A Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Tokeninput_EntityService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.entity'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('entity');
    }

    /**
     * Gets the 'genemu.form.jquery.type.tokeninput.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType A Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Tokeninput_LanguageService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.language'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('language');
    }

    /**
     * Gets the 'genemu.form.jquery.type.tokeninput.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType A Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Tokeninput_LocaleService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.locale'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('locale');
    }

    /**
     * Gets the 'genemu.form.jquery.type.tokeninput.model' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType A Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Tokeninput_ModelService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.model'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('model');
    }

    /**
     * Gets the 'genemu.form.jquery.type.tokeninput.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType A Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType instance.
     */
    protected function getGenemu_Form_Jquery_Type_Tokeninput_TimezoneService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.timezone'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('timezone');
    }

    /**
     * Gets the 'genemu.form.model.type.ajaxmodel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\Model\Type\AjaxModelType A Genemu\Bundle\FormBundle\Form\Model\Type\AjaxModelType instance.
     */
    protected function getGenemu_Form_Model_Type_AjaxmodelService()
    {
        return $this->services['genemu.form.model.type.ajaxmodel'] = new \Genemu\Bundle\FormBundle\Form\Model\Type\AjaxModelType();
    }

    /**
     * Gets the 'genemu.form.type_recaptcha.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Form\Core\Validator\ReCaptchaValidator A Genemu\Bundle\FormBundle\Form\Core\Validator\ReCaptchaValidator instance.
     */
    protected function getGenemu_Form_TypeRecaptcha_ValidatorService()
    {
        return $this->services['genemu.form.type_recaptcha.validator'] = new \Genemu\Bundle\FormBundle\Form\Core\Validator\ReCaptchaValidator($this->get('request'), '6LeYWMcSAAAAAPOC3fEIg5UwtHGZzO1HB1NZYx9F', array('code' => NULL, 'host' => 'api-verify.recaptcha.net', 'port' => 80, 'path' => '/verify', 'timeout' => 10));
    }

    /**
     * Gets the 'genemu.gd.captcha' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Gd\Type\Captcha A Genemu\Bundle\FormBundle\Gd\Type\Captcha instance.
     */
    protected function getGenemu_Gd_CaptchaService()
    {
        return $this->services['genemu.gd.captcha'] = new \Genemu\Bundle\FormBundle\Gd\Type\Captcha($this->get('session'), 'ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'genemu.twig.extension.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Genemu\Bundle\FormBundle\Twig\Extension\FormExtension A Genemu\Bundle\FormBundle\Twig\Extension\FormExtension instance.
     */
    protected function getGenemu_Twig_Extension_FormService()
    {
        return $this->services['genemu.twig.extension.form'] = new \Genemu\Bundle\FormBundle\Twig\Extension\FormExtension($this->get('twig.form.renderer'));
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'));
    }

    /**
     * Gets the 'jms_aop.interceptor_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\AopBundle\Aop\InterceptorLoader A JMS\AopBundle\Aop\InterceptorLoader instance.
     */
    protected function getJmsAop_InterceptorLoaderService()
    {
        return $this->services['jms_aop.interceptor_loader'] = new \JMS\AopBundle\Aop\InterceptorLoader($this, array());
    }

    /**
     * Gets the 'jms_aop.pointcut_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\AopBundle\Aop\PointcutContainer A JMS\AopBundle\Aop\PointcutContainer instance.
     */
    protected function getJmsAop_PointcutContainerService()
    {
        return $this->services['jms_aop.pointcut_container'] = new \JMS\AopBundle\Aop\PointcutContainer(array('security.access.method_interceptor' => $this->get('security.access.pointcut')));
    }

    /**
     * Gets the 'jms_di_extra.metadata.converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\DiExtraBundle\Metadata\MetadataConverter A JMS\DiExtraBundle\Metadata\MetadataConverter instance.
     */
    protected function getJmsDiExtra_Metadata_ConverterService()
    {
        return $this->services['jms_di_extra.metadata.converter'] = new \JMS\DiExtraBundle\Metadata\MetadataConverter();
    }

    /**
     * Gets the 'jms_di_extra.metadata.metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Metadata\MetadataFactory A Metadata\MetadataFactory instance.
     */
    protected function getJmsDiExtra_Metadata_MetadataFactoryService()
    {
        $this->services['jms_di_extra.metadata.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_di_extra.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache(new \Metadata\Cache\FileCache('/var/www/mynet/app/cache/de_/jms_diextra/metadata'));

        return $instance;
    }

    /**
     * Gets the 'jms_di_extra.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver A JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver instance.
     */
    protected function getJmsDiExtra_MetadataDriverService()
    {
        return $this->services['jms_di_extra.metadata_driver'] = new \JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'knp_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Silex\RouterAwareFactory A Knp\Menu\Silex\RouterAwareFactory instance.
     */
    protected function getKnpMenu_FactoryService()
    {
        return $this->services['knp_menu.factory'] = new \Knp\Menu\Silex\RouterAwareFactory($this->get('router'));
    }

    /**
     * Gets the 'knp_menu.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Provider\ChainProvider A Knp\Menu\Provider\ChainProvider instance.
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array()), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }

    /**
     * Gets the 'knp_menu.renderer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Renderer\ListRenderer A Knp\Menu\Renderer\ListRenderer instance.
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(array(), 'UTF-8');
    }

    /**
     * Gets the 'knp_menu.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Renderer\TwigRenderer A Knp\Menu\Renderer\TwigRenderer instance.
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', array());
    }

    /**
     * Gets the 'knp_menu.renderer_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider A Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider instance.
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the 'knp_paginator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Component\Pager\Paginator A Knp\Component\Pager\Paginator instance.
     */
    protected function getKnpPaginatorService()
    {
        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator($this->get('event_dispatcher'));

        $instance->setDefaultPaginatorOptions(array('pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true));

        return $instance;
    }

    /**
     * Gets the 'knp_paginator.helper.processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\PaginatorBundle\Helper\Processor A Knp\Bundle\PaginatorBundle\Helper\Processor instance.
     */
    protected function getKnpPaginator_Helper_ProcessorService()
    {
        return $this->services['knp_paginator.helper.processor'] = new \Knp\Bundle\PaginatorBundle\Helper\Processor($this->get('templating.helper.router'), $this->get('translator.default'));
    }

    /**
     * Gets the 'knp_paginator.subscriber.filtration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber A Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber instance.
     */
    protected function getKnpPaginator_Subscriber_FiltrationService()
    {
        return $this->services['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber();
    }

    /**
     * Gets the 'knp_paginator.subscriber.paginate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber A Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber instance.
     */
    protected function getKnpPaginator_Subscriber_PaginateService()
    {
        return $this->services['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber();
    }

    /**
     * Gets the 'knp_paginator.subscriber.sliding_pagination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber A Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber instance.
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->services['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(array('defaultPaginationTemplate' => 'KnpPaginatorBundle:Pagination:sliding.html.twig', 'defaultSortableTemplate' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig', 'defaultFiltrationTemplate' => 'KnpPaginatorBundle:Pagination:filtration.html.twig', 'defaultPageRange' => 5));
    }

    /**
     * Gets the 'knp_paginator.subscriber.sortable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber A Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber instance.
     */
    protected function getKnpPaginator_Subscriber_SortableService()
    {
        return $this->services['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber();
    }

    /**
     * Gets the 'knp_paginator.templating.helper.pagination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\PaginatorBundle\Templating\PaginationHelper A Knp\Bundle\PaginatorBundle\Templating\PaginationHelper instance.
     */
    protected function getKnpPaginator_Templating_Helper_PaginationService()
    {
        return $this->services['knp_paginator.templating.helper.pagination'] = new \Knp\Bundle\PaginatorBundle\Templating\PaginationHelper($this->get('knp_paginator.helper.processor'), $this->get('debug.templating.engine.php'));
    }

    /**
     * Gets the 'knp_paginator.twig.extension.pagination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension A Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension instance.
     */
    protected function getKnpPaginator_Twig_Extension_PaginationService()
    {
        return $this->services['knp_paginator.twig.extension.pagination'] = new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension($this->get('knp_paginator.helper.processor'));
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance.
     */
    protected function getLocaleListenerService()
    {
        $this->services['locale_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('en', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.firephp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Handler\FirePHPHandler A Symfony\Bridge\Monolog\Handler\FirePHPHandler instance.
     */
    protected function getMonolog_Handler_FirephpService()
    {
        return $this->services['monolog.handler.firephp'] = new \Symfony\Bridge\Monolog\Handler\FirePHPHandler(200, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler('/var/www/mynet/app/logs/dev.log', 100, true);
    }

    /**
     * Gets the 'monolog.logger.deprecation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DeprecationService()
    {
        $this->services['monolog.logger.deprecation'] = $instance = new \Symfony\Bridge\Monolog\Logger('deprecation');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.emergency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EmergencyService()
    {
        $this->services['monolog.logger.emergency'] = $instance = new \Symfony\Bridge\Monolog\Logger('emergency');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'my.facebook.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return MY\UserBundle\Security\User\Provider\FacebookProvider A MY\UserBundle\Security\User\Provider\FacebookProvider instance.
     */
    protected function getMy_Facebook_UserService()
    {
        return $this->services['my.facebook.user'] = new \MY\UserBundle\Security\User\Provider\FacebookProvider($this->get('fos_facebook.api'), $this->get('fos_user.user_manager'), $this->get('validator'), $this);
    }

    /**
     * Gets the 'my.main.admin.ads' service.
     *
     * @return MY\MainBundle\Admin\AdsAdmin A MY\MainBundle\Admin\AdsAdmin instance.
     */
    protected function getMy_Main_Admin_AdsService()
    {
        $instance = new \MY\MainBundle\Admin\AdsAdmin('my.main.admin.ads', 'MY\\MainBundle\\Entity\\Ads', 'SonataAdminBundle:CRUD');

        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Ads');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'MYMainBundle:Admin:edit_i18n.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the 'my.main.admin.concurs' service.
     *
     * @return MY\MainBundle\Admin\ConcursAdmin A MY\MainBundle\Admin\ConcursAdmin instance.
     */
    protected function getMy_Main_Admin_ConcursService()
    {
        $instance = new \MY\MainBundle\Admin\ConcursAdmin('my.main.admin.concurs', 'MY\\MainBundle\\Entity\\Concurs', 'SonataAdminBundle:CRUD');

        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Concurs');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'MYMainBundle:Admin:edit_i18n.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the 'my.main.admin.gallery' service.
     *
     * @return MY\MainBundle\Admin\GalleryAdmin A MY\MainBundle\Admin\GalleryAdmin instance.
     */
    protected function getMy_Main_Admin_GalleryService()
    {
        $instance = new \MY\MainBundle\Admin\GalleryAdmin('my.main.admin.gallery', 'MY\\MainBundle\\Entity\\Gallery', 'SonataAdminBundle:CRUD');

        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Gallery');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'MYMainBundle:Admin:edit_i18n.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the 'my.main.admin.horoscop' service.
     *
     * @return MY\MainBundle\Admin\HoroscopAdmin A MY\MainBundle\Admin\HoroscopAdmin instance.
     */
    protected function getMy_Main_Admin_HoroscopService()
    {
        $instance = new \MY\MainBundle\Admin\HoroscopAdmin('my.main.admin.horoscop', 'MY\\MainBundle\\Entity\\Horoscop', 'SonataAdminBundle:CRUD');

        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Horoscop');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'MYMainBundle:Admin:edit_i18n.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the 'my.main.admin.interestings' service.
     *
     * @return MY\MainBundle\Admin\InterestingsAdmin A MY\MainBundle\Admin\InterestingsAdmin instance.
     */
    protected function getMy_Main_Admin_InterestingsService()
    {
        $instance = new \MY\MainBundle\Admin\InterestingsAdmin('my.main.admin.interestings', 'MY\\MainBundle\\Entity\\Interestings', 'SonataAdminBundle:CRUD');

        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Interestings');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'MYMainBundle:Admin:edit_i18n.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the 'my.main.admin.news' service.
     *
     * @return MY\MainBundle\Admin\NewsAdmin A MY\MainBundle\Admin\NewsAdmin instance.
     */
    protected function getMy_Main_Admin_NewsService()
    {
        $instance = new \MY\MainBundle\Admin\NewsAdmin('my.main.admin.news', 'MY\\MainBundle\\Entity\\News', 'SonataAdminBundle:CRUD');

        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('News');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'MYMainBundle:Admin:edit_i18n.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the 'my.main.admin.realty' service.
     *
     * @return MY\MainBundle\Admin\RealtyAdmin A MY\MainBundle\Admin\RealtyAdmin instance.
     */
    protected function getMy_Main_Admin_RealtyService()
    {
        $instance = new \MY\MainBundle\Admin\RealtyAdmin('my.main.admin.realty', 'MY\\MainBundle\\Entity\\Realty', 'SonataAdminBundle:CRUD');

        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Realty');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'MYMainBundle:Admin:edit_i18n.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the 'my.main.admin.slider' service.
     *
     * @return MY\MainBundle\Admin\SliderAdmin A MY\MainBundle\Admin\SliderAdmin instance.
     */
    protected function getMy_Main_Admin_SliderService()
    {
        $instance = new \MY\MainBundle\Admin\SliderAdmin('my.main.admin.slider', 'MY\\MainBundle\\Entity\\Slider', 'SonataAdminBundle:CRUD');

        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Slider');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'MYMainBundle:Admin:edit_i18n.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the 'my_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return MY\UserBundle\Form\Type\RegistrationFormType A MY\UserBundle\Form\Type\RegistrationFormType instance.
     */
    protected function getMyUser_Registration_Form_TypeService()
    {
        return $this->services['my_user.registration.form.type'] = new \MY\UserBundle\Form\Type\RegistrationFormType('MY\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'presta_sitemap.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Presta\SitemapBundle\Service\Dumper A Presta\SitemapBundle\Service\Dumper instance.
     */
    protected function getPrestaSitemap_DumperService()
    {
        return $this->services['presta_sitemap.dumper'] = new \Presta\SitemapBundle\Service\Dumper($this->get('event_dispatcher'), $this->get('filesystem'));
    }

    /**
     * Gets the 'presta_sitemap.eventlistener.route_annotation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Presta\SitemapBundle\EventListener\RouteAnnotationEventListener A Presta\SitemapBundle\EventListener\RouteAnnotationEventListener instance.
     */
    protected function getPrestaSitemap_Eventlistener_RouteAnnotationService()
    {
        return $this->services['presta_sitemap.eventlistener.route_annotation'] = new \Presta\SitemapBundle\EventListener\RouteAnnotationEventListener($this->get('router'));
    }

    /**
     * Gets the 'presta_sitemap.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Presta\SitemapBundle\Service\Generator A Presta\SitemapBundle\Service\Generator instance.
     */
    protected function getPrestaSitemap_GeneratorService()
    {
        return $this->services['presta_sitemap.generator'] = new \Presta\SitemapBundle\Service\Generator($this->get('event_dispatcher'), $this->get('router'), NULL, '3600');
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $c->setKernel($b);
        }

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $d->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage('file:/var/www/mynet/app/cache/de_/profiler', '', '', 86400), $a);

        $instance->add($c);
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add($this->get('data_collector.router'));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($d);
        $instance->add(new \Sonata\BlockBundle\Profiler\DataCollector\BlockDataCollector($this->get('sonata.block.templating.helper'), array(0 => 'sonata.page.block.container', 1 => 'cmf.block.container', 2 => 'cmf.block.slideshow')));

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false);
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance.
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor();
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance.
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, '/var/www/mynet/app/config/routing_dev.yml', array('cache_dir' => '/var/www/mynet/app/cache/de_', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'ap_DevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'ap_DevUrlMatcher', 'strict_requirements' => true), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        $this->services['router_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('sonata.admin.route_loader'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\RememberingAccessDecisionManager A JMS\SecurityExtraBundle\Security\Authorization\RememberingAccessDecisionManager instance.
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\LazyLoadingExpressionVoter($this->get('security.expressions.handler'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $a->setLazyCompiler($this, 'security.expressions.compiler');
        $a->setCacheDir('/var/www/mynet/app/cache/de_/jms_security/expressions');

        return $this->services['security.access.decision_manager'] = new \JMS\SecurityExtraBundle\Security\Authorization\RememberingAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => $a, 1 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($this->get('security.role_hierarchy')), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver'))), 'affirmative', false, true));
    }

    /**
     * Gets the 'security.access.method_interceptor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor A JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor instance.
     */
    protected function getSecurity_Access_MethodInterceptorService()
    {
        return $this->services['security.access.method_interceptor'] = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor($this->get('security.context'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AfterInvocationManager(array()), new \JMS\SecurityExtraBundle\Security\Authorization\RunAsManager('RunAsToken', 'ROLE_'), $this->get('security.extra.metadata_factory'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.access.pointcut' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut A JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut instance.
     */
    protected function getSecurity_Access_PointcutService()
    {
        $this->services['security.access.pointcut'] = $instance = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut($this->get('security.extra.metadata_factory'), false, array());

        $instance->setSecuredClasses(array());

        return $instance;
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance.
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance.
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance.
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }

    /**
     * Gets the 'security.expressions.compiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler A JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler instance.
     */
    protected function getSecurity_Expressions_CompilerService()
    {
        $a = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\Compiler\ContainerAwareVariableCompiler();
        $a->setMaps(array('trust_resolver' => 'security.authentication.trust_resolver', 'role_hierarchy' => 'security.role_hierarchy', 'permission_evaluator' => 'security.acl.permission_evaluator'), array());

        $this->services['security.expressions.compiler'] = $instance = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler();

        $instance->addFunctionCompiler(new \JMS\SecurityExtraBundle\Security\Acl\Expression\HasPermissionFunctionCompiler());
        $instance->addTypeCompiler(new \JMS\SecurityExtraBundle\Security\Authorization\Expression\Compiler\ParameterExpressionCompiler());
        $instance->addTypeCompiler($a);

        return $instance;
    }

    /**
     * Gets the 'security.expressions.reverse_interpreter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Expression\ReverseInterpreter A JMS\SecurityExtraBundle\Security\Authorization\Expression\ReverseInterpreter instance.
     */
    protected function getSecurity_Expressions_ReverseInterpreterService()
    {
        return $this->services['security.expressions.reverse_interpreter'] = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ReverseInterpreter($this->get('security.expressions.compiler'), $this->get('security.expressions.handler'));
    }

    /**
     * Gets the 'security.extra.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Metadata\Driver\DriverChain A Metadata\Driver\DriverChain instance.
     */
    protected function getSecurity_Extra_MetadataDriverService()
    {
        return $this->services['security.extra.metadata_driver'] = new \Metadata\Driver\DriverChain(array(0 => new \JMS\SecurityExtraBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance.
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.admin' => new \Symfony\Component\HttpFoundation\RequestMatcher('/admin(.*)'), 'security.firewall.map.context.public' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_AdminService()
    {
        $a = $this->get('security.context');
        $b = $this->get('security.user.provider.concrete.chain_provider');
        $c = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('security.http_utils');
        $f = $this->get('http_kernel');

        $g = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $e, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($e, '/admin/login'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/admin/logout'));
        $g->addHandler($this->get('security.logout.handler.session'));

        $h = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($e, array('login_path' => '/admin/login', 'use_referer' => true, 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path'));
        $h->setProviderKey('admin');

        return $this->services['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $b, 1 => $this->get('fos_user.user_manager'), 2 => $this->get('my.facebook.user'), 3 => $this->get('my_user.my_provider')), 'user', $c, $d), 2 => $g, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $this->get('security.authentication.manager'), $this->get('security.authentication.session_strategy'), $e, 'admin', $h, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($f, $e, array('login_path' => '/admin/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $c), array('check_path' => '/admin/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $c, $d), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '5294ea04764a9', $c), 5 => $this->get('security.access_listener'), 6 => new \Symfony\Component\Security\Http\Firewall\SwitchUserListener($a, $b, $this->get('security.user_checker'), 'admin', $this->get('security.access.decision_manager'), $c, '_switch_user', 'ROLE_ALLOWED_TO_SWITCH', $d)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $e, 'admin', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $e, '/admin/login', false), NULL, NULL, $c));
    }

    /**
     * Gets the 'security.firewall.map.context.public' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_PublicService()
    {
        $a = $this->get('security.context');
        $b = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $c = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('security.http_utils');
        $e = $this->get('http_kernel');
        $f = $this->get('security.authentication.manager');
        $g = $this->get('security.authentication.session_strategy');

        $h = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $d, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($d, '/am'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/logout'));
        $h->addHandler($this->get('security.logout.handler.session'));

        $i = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($d, array('default_target_path' => '/', 'login_path' => '/login', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $i->setProviderKey('public');

        $j = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($d, array('login_path' => 'fos_user_security_login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $j->setProviderKey('public');

        return $this->services['security.firewall.map.context.public'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('security.user.provider.concrete.chain_provider'), 1 => $this->get('fos_user.user_manager'), 2 => $this->get('my.facebook.user'), 3 => $this->get('my_user.my_provider')), 'public', $b, $c), 2 => $h, 3 => new \FOS\FacebookBundle\Security\Firewall\FacebookListener($a, $f, $g, $d, 'public', $i, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $d, array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $b), array('check_path' => '/loginFb', 'app_url' => 'sovorel.am', 'server_url' => 'sovorel.am', 'use_forward' => false, 'require_previous_session' => true, 'display' => 'page', 'create_user_if_not_exists' => false, 'redirect_to_facebook_login' => true), $b, $c), 4 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $f, $g, $d, 'public', $j, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $d, array('login_path' => 'fos_user_security_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $b), array('check_path' => 'fos_user_security_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $b, $c), 5 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '5294ea04764a9', $b), 6 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $d, 'public', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $d, 'fos_user_security_login', false), NULL, NULL, $b));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance.
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance.
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_SONATA_ADMIN'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH')));
    }

    /**
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance.
     */
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom('/var/www/mynet/app/cache/de_/secure_random.seed', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance.
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_distribution.webconfigurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\DistributionBundle\Configurator\Configurator A Sensio\Bundle\DistributionBundle\Configurator\Configurator instance.
     */
    protected function getSensioDistribution_WebconfiguratorService()
    {
        return $this->services['sensio_distribution.webconfigurator'] = new \Sensio\Bundle\DistributionBundle\Configurator\Configurator('/var/www/mynet/app');
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener instance.
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance.
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance.
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance.
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance.
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance.
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance.
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler('/var/www/mynet/app/cache/de_/sessions');
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance.
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage('/var/www/mynet/app/cache/de_/sessions');
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance.
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array(), $this->get('session.handler'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance.
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'sonata.admin.audit.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Model\AuditManager A Sonata\AdminBundle\Model\AuditManager instance.
     */
    protected function getSonata_Admin_Audit_ManagerService()
    {
        return $this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this);
    }

    /**
     * Gets the 'sonata.admin.block.admin_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Block\AdminListBlockService A Sonata\AdminBundle\Block\AdminListBlockService instance.
     */
    protected function getSonata_Admin_Block_AdminListService()
    {
        return $this->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService('sonata.admin.block.admin_list', $this->get('templating'), $this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.block.search_result' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Block\AdminSearchBlockService A Sonata\AdminBundle\Block\AdminSearchBlockService instance.
     */
    protected function getSonata_Admin_Block_SearchResultService()
    {
        return $this->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService('sonata.admin.block.search_result', $this->get('templating'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.search.handler'));
    }

    /**
     * Gets the 'sonata.admin.builder.filter.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Filter\FilterFactory A Sonata\AdminBundle\Filter\FilterFactory instance.
     */
    protected function getSonata_Admin_Builder_Filter_FactoryService()
    {
        return $this->services['sonata.admin.builder.filter.factory'] = new \Sonata\AdminBundle\Filter\FilterFactory($this, array('doctrine_orm_boolean' => 'sonata.admin.orm.filter.type.boolean', 'doctrine_orm_callback' => 'sonata.admin.orm.filter.type.callback', 'doctrine_orm_choice' => 'sonata.admin.orm.filter.type.choice', 'doctrine_orm_model' => 'sonata.admin.orm.filter.type.model', 'doctrine_orm_string' => 'sonata.admin.orm.filter.type.string', 'doctrine_orm_number' => 'sonata.admin.orm.filter.type.number', 'doctrine_orm_date' => 'sonata.admin.orm.filter.type.date', 'doctrine_orm_date_range' => 'sonata.admin.orm.filter.type.date_range', 'doctrine_orm_datetime' => 'sonata.admin.orm.filter.type.datetime', 'doctrine_orm_time' => 'sonata.admin.orm.filter.type.time', 'doctrine_orm_datetime_range' => 'sonata.admin.orm.filter.type.datetime_range', 'doctrine_orm_class' => 'sonata.admin.orm.filter.type.class'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_datagrid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder A Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder instance.
     */
    protected function getSonata_Admin_Builder_OrmDatagridService()
    {
        return $this->services['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder($this->get('form.factory'), $this->get('sonata.admin.builder.filter.factory'), $this->get('sonata.admin.guesser.orm_datagrid_chain'), true);
    }

    /**
     * Gets the 'sonata.admin.builder.orm_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Builder\FormContractor A Sonata\DoctrineORMAdminBundle\Builder\FormContractor instance.
     */
    protected function getSonata_Admin_Builder_OrmFormService()
    {
        return $this->services['sonata.admin.builder.orm_form'] = new \Sonata\DoctrineORMAdminBundle\Builder\FormContractor($this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Builder\ListBuilder A Sonata\DoctrineORMAdminBundle\Builder\ListBuilder instance.
     */
    protected function getSonata_Admin_Builder_OrmListService()
    {
        return $this->services['sonata.admin.builder.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder($this->get('sonata.admin.guesser.orm_list_chain'), array('array' => 'SonataAdminBundle:CRUD:list_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:list_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:list_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:list_url.html.twig'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_show' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder A Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder instance.
     */
    protected function getSonata_Admin_Builder_OrmShowService()
    {
        return $this->services['sonata.admin.builder.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder($this->get('sonata.admin.guesser.orm_show_chain'), array('array' => 'SonataAdminBundle:CRUD:show_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:show_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:show_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'currency' => 'SonataAdminBundle:CRUD:base_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:base_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:show_url.html.twig'));
    }

    /**
     * Gets the 'sonata.admin.controller.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Controller\HelperController A Sonata\AdminBundle\Controller\HelperController instance.
     */
    protected function getSonata_Admin_Controller_AdminService()
    {
        return $this->services['sonata.admin.controller.admin'] = new \Sonata\AdminBundle\Controller\HelperController($this->get('twig'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.helper'));
    }

    /**
     * Gets the 'sonata.admin.event.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Event\AdminEventExtension A Sonata\AdminBundle\Event\AdminEventExtension instance.
     */
    protected function getSonata_Admin_Event_ExtensionService()
    {
        return $this->services['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension($this->get('event_dispatcher'));
    }

    /**
     * Gets the 'sonata.admin.exporter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Export\Exporter A Sonata\AdminBundle\Export\Exporter instance.
     */
    protected function getSonata_Admin_ExporterService()
    {
        return $this->services['sonata.admin.exporter'] = new \Sonata\AdminBundle\Export\Exporter();
    }

    /**
     * Gets the 'sonata.admin.form.extension.field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension A Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension instance.
     */
    protected function getSonata_Admin_Form_Extension_FieldService()
    {
        return $this->services['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension(array('email' => 'span5', 'textarea' => 'span5', 'text' => 'span5', 'choice' => 'span5', 'integer' => 'span5', 'datetime' => 'sonata-medium-date', 'date' => 'sonata-medium-date'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\Filter\ChoiceType A Sonata\AdminBundle\Form\Type\Filter\ChoiceType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_ChoiceService()
    {
        return $this->services['sonata.admin.form.filter.type.choice'] = new \Sonata\AdminBundle\Form\Type\Filter\ChoiceType($this->get('translator.default'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\Filter\DateType A Sonata\AdminBundle\Form\Type\Filter\DateType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DateService()
    {
        return $this->services['sonata.admin.form.filter.type.date'] = new \Sonata\AdminBundle\Form\Type\Filter\DateType($this->get('translator.default'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.daterange' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\Filter\DateRangeType A Sonata\AdminBundle\Form\Type\Filter\DateRangeType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DaterangeService()
    {
        return $this->services['sonata.admin.form.filter.type.daterange'] = new \Sonata\AdminBundle\Form\Type\Filter\DateRangeType($this->get('translator.default'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\Filter\DateTimeType A Sonata\AdminBundle\Form\Type\Filter\DateTimeType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeType($this->get('translator.default'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.datetime_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType A Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeRangeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType($this->get('translator.default'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\Filter\DefaultType A Sonata\AdminBundle\Form\Type\Filter\DefaultType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DefaultService()
    {
        return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\Filter\NumberType A Sonata\AdminBundle\Form\Type\Filter\NumberType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_NumberService()
    {
        return $this->services['sonata.admin.form.filter.type.number'] = new \Sonata\AdminBundle\Form\Type\Filter\NumberType($this->get('translator.default'));
    }

    /**
     * Gets the 'sonata.admin.form.type.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\AdminType A Sonata\AdminBundle\Form\Type\AdminType instance.
     */
    protected function getSonata_Admin_Form_Type_AdminService()
    {
        return $this->services['sonata.admin.form.type.admin'] = new \Sonata\AdminBundle\Form\Type\AdminType();
    }

    /**
     * Gets the 'sonata.admin.form.type.array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\ImmutableArrayType A Sonata\AdminBundle\Form\Type\ImmutableArrayType instance.
     */
    protected function getSonata_Admin_Form_Type_ArrayService()
    {
        return $this->services['sonata.admin.form.type.array'] = new \Sonata\AdminBundle\Form\Type\ImmutableArrayType();
    }

    /**
     * Gets the 'sonata.admin.form.type.boolean' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\BooleanType A Sonata\AdminBundle\Form\Type\BooleanType instance.
     */
    protected function getSonata_Admin_Form_Type_BooleanService()
    {
        return $this->services['sonata.admin.form.type.boolean'] = new \Sonata\AdminBundle\Form\Type\BooleanType();
    }

    /**
     * Gets the 'sonata.admin.form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\CollectionType A Sonata\AdminBundle\Form\Type\CollectionType instance.
     */
    protected function getSonata_Admin_Form_Type_CollectionService()
    {
        return $this->services['sonata.admin.form.type.collection'] = new \Sonata\AdminBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the 'sonata.admin.form.type.date_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\DateRangeType A Sonata\AdminBundle\Form\Type\DateRangeType instance.
     */
    protected function getSonata_Admin_Form_Type_DateRangeService()
    {
        return $this->services['sonata.admin.form.type.date_range'] = new \Sonata\AdminBundle\Form\Type\DateRangeType($this->get('translator.default'));
    }

    /**
     * Gets the 'sonata.admin.form.type.datetime_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\DateTimeRangeType A Sonata\AdminBundle\Form\Type\DateTimeRangeType instance.
     */
    protected function getSonata_Admin_Form_Type_DatetimeRangeService()
    {
        return $this->services['sonata.admin.form.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\DateTimeRangeType($this->get('translator.default'));
    }

    /**
     * Gets the 'sonata.admin.form.type.equal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\EqualType A Sonata\AdminBundle\Form\Type\EqualType instance.
     */
    protected function getSonata_Admin_Form_Type_EqualService()
    {
        return $this->services['sonata.admin.form.type.equal'] = new \Sonata\AdminBundle\Form\Type\EqualType($this->get('translator.default'));
    }

    /**
     * Gets the 'sonata.admin.form.type.model_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\ModelType A Sonata\AdminBundle\Form\Type\ModelType instance.
     */
    protected function getSonata_Admin_Form_Type_ModelChoiceService()
    {
        return $this->services['sonata.admin.form.type.model_choice'] = new \Sonata\AdminBundle\Form\Type\ModelType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\ModelHiddenType A Sonata\AdminBundle\Form\Type\ModelHiddenType instance.
     */
    protected function getSonata_Admin_Form_Type_ModelHiddenService()
    {
        return $this->services['sonata.admin.form.type.model_hidden'] = new \Sonata\AdminBundle\Form\Type\ModelHiddenType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\ModelTypeList A Sonata\AdminBundle\Form\Type\ModelTypeList instance.
     */
    protected function getSonata_Admin_Form_Type_ModelListService()
    {
        return $this->services['sonata.admin.form.type.model_list'] = new \Sonata\AdminBundle\Form\Type\ModelTypeList();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_reference' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\ModelReferenceType A Sonata\AdminBundle\Form\Type\ModelReferenceType instance.
     */
    protected function getSonata_Admin_Form_Type_ModelReferenceService()
    {
        return $this->services['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }

    /**
     * Gets the 'sonata.admin.form.type.translatable_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\TranslatableChoiceType A Sonata\AdminBundle\Form\Type\TranslatableChoiceType instance.
     */
    protected function getSonata_Admin_Form_Type_TranslatableChoiceService()
    {
        return $this->services['sonata.admin.form.type.translatable_choice'] = new \Sonata\AdminBundle\Form\Type\TranslatableChoiceType($this->get('translator.default'));
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_datagrid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser instance.
     */
    protected function getSonata_Admin_Guesser_OrmDatagridService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_datagrid_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance.
     */
    protected function getSonata_Admin_Guesser_OrmDatagridChainService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_datagrid')));
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser instance.
     */
    protected function getSonata_Admin_Guesser_OrmListService()
    {
        return $this->services['sonata.admin.guesser.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_list_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance.
     */
    protected function getSonata_Admin_Guesser_OrmListChainService()
    {
        return $this->services['sonata.admin.guesser.orm_list_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_list')));
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_show' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser instance.
     */
    protected function getSonata_Admin_Guesser_OrmShowService()
    {
        return $this->services['sonata.admin.guesser.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_show_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance.
     */
    protected function getSonata_Admin_Guesser_OrmShowChainService()
    {
        return $this->services['sonata.admin.guesser.orm_show_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_show')));
    }

    /**
     * Gets the 'sonata.admin.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Admin\AdminHelper A Sonata\AdminBundle\Admin\AdminHelper instance.
     */
    protected function getSonata_Admin_HelperService()
    {
        return $this->services['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.label.strategy.bc' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy A Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_BcService()
    {
        return $this->services['sonata.admin.label.strategy.bc'] = new \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.form_component' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy A Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_FormComponentService()
    {
        return $this->services['sonata.admin.label.strategy.form_component'] = new \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy A Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_NativeService()
    {
        return $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy A Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_NoopService()
    {
        return $this->services['sonata.admin.label.strategy.noop'] = new \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.underscore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy A Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_UnderscoreService()
    {
        return $this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.manager.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Model\ModelManager A Sonata\DoctrineORMAdminBundle\Model\ModelManager instance.
     */
    protected function getSonata_Admin_Manager_OrmService()
    {
        return $this->services['sonata.admin.manager.orm'] = new \Sonata\DoctrineORMAdminBundle\Model\ModelManager($this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.admin.manipulator.acl.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Util\AdminAclManipulator A Sonata\AdminBundle\Util\AdminAclManipulator instance.
     */
    protected function getSonata_Admin_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the 'sonata.admin.manipulator.acl.object.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator A Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator instance.
     */
    protected function getSonata_Admin_Manipulator_Acl_Object_OrmService()
    {
        return $this->services['sonata.admin.manipulator.acl.object.orm'] = new \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator();
    }

    /**
     * Gets the 'sonata.admin.object.manipulator.acl.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Util\AdminObjectAclManipulator A Sonata\AdminBundle\Util\AdminObjectAclManipulator instance.
     */
    protected function getSonata_Admin_Object_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator($this->get('form.factory'), 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.boolean' service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter A Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.callback' service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter A Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.choice' service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter A Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.class' service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Filter\ClassFilter A Sonata\DoctrineORMAdminBundle\Filter\ClassFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_ClassService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.date' service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Filter\DateFilter A Sonata\DoctrineORMAdminBundle\Filter\DateFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.date_range' service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.datetime' service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.datetime_range' service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.model' service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Filter\ModelFilter A Sonata\DoctrineORMAdminBundle\Filter\ModelFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.number' service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Filter\NumberFilter A Sonata\DoctrineORMAdminBundle\Filter\NumberFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.string' service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Filter\StringFilter A Sonata\DoctrineORMAdminBundle\Filter\StringFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.time' service.
     *
     * @return Sonata\DoctrineORMAdminBundle\Filter\TimeFilter A Sonata\DoctrineORMAdminBundle\Filter\TimeFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_TimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
    }

    /**
     * Gets the 'sonata.admin.pool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Admin\Pool A Sonata\AdminBundle\Admin\Pool instance.
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'MyNet Project', '/bundles/sonataadmin/logo_title.png', array('html5_validate' => true, 'confirm_exit' => true, 'use_select2' => true));

        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig'));
        $instance->setAdminServiceIds(array(0 => 'sonata.media.admin.media', 1 => 'sonata.media.admin.gallery', 2 => 'sonata.media.admin.gallery_has_media', 3 => 'sonata.user.admin.user', 4 => 'sonata.user.admin.group', 5 => 'my.main.admin.interestings', 6 => 'my.main.admin.horoscop', 7 => 'my.main.admin.concurs', 8 => 'my.main.admin.realty', 9 => 'my.main.admin.news', 10 => 'my.main.admin.gallery', 11 => 'my.main.admin.ads', 12 => 'my.main.admin.slider'));
        $instance->setAdminGroups(array('sonata_media' => array('label' => 'sonata_media', 'label_catalogue' => 'SonataMediaBundle', 'roles' => array(), 'items' => array(0 => 'sonata.media.admin.media', 1 => 'sonata.media.admin.gallery')), 'sonata_user' => array('label' => 'sonata_user', 'label_catalogue' => 'SonataUserBundle', 'roles' => array(), 'items' => array(0 => 'sonata.user.admin.user', 1 => 'sonata.user.admin.group')), 'Interestings' => array('label' => 'Interestings', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'my.main.admin.interestings', 1 => 'my.main.admin.horoscop')), 'Concurs' => array('label' => 'Concurs', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'my.main.admin.concurs')), 'Realty' => array('label' => 'Realty', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'my.main.admin.realty')), 'Site Blocks' => array('label' => 'Site Blocks', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'my.main.admin.news', 1 => 'my.main.admin.gallery')), 'Ads' => array('label' => 'Ads', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'my.main.admin.ads')), 'Slider' => array('label' => 'Slider', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'my.main.admin.slider'))));
        $instance->setAdminClasses(array('MY\\MediaBundle\\Entity\\Media' => 'sonata.media.admin.media', 'MY\\MediaBundle\\Entity\\Gallery' => 'sonata.media.admin.gallery', 'MY\\MediaBundle\\Entity\\GalleryHasMedia' => 'sonata.media.admin.gallery_has_media', 'MY\\UserBundle\\Entity\\User' => 'sonata.user.admin.user', 'MY\\UserBundle\\Entity\\Group' => 'sonata.user.admin.group', 'MY\\MainBundle\\Entity\\Interestings' => 'my.main.admin.interestings', 'MY\\MainBundle\\Entity\\Horoscop' => 'my.main.admin.horoscop', 'MY\\MainBundle\\Entity\\Concurs' => 'my.main.admin.concurs', 'MY\\MainBundle\\Entity\\Realty' => 'my.main.admin.realty', 'MY\\MainBundle\\Entity\\News' => 'my.main.admin.news', 'MY\\MainBundle\\Entity\\Gallery' => 'my.main.admin.gallery', 'MY\\MainBundle\\Entity\\Ads' => 'my.main.admin.ads', 'MY\\MainBundle\\Entity\\Slider' => 'my.main.admin.slider'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.route.default_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Route\DefaultRouteGenerator A Sonata\AdminBundle\Route\DefaultRouteGenerator instance.
     */
    protected function getSonata_Admin_Route_DefaultGeneratorService()
    {
        return $this->services['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator($this->get('router'));
    }

    /**
     * Gets the 'sonata.admin.route.path_info' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Route\PathInfoBuilder A Sonata\AdminBundle\Route\PathInfoBuilder instance.
     */
    protected function getSonata_Admin_Route_PathInfoService()
    {
        return $this->services['sonata.admin.route.path_info'] = new \Sonata\AdminBundle\Route\PathInfoBuilder($this->get('sonata.admin.audit.manager'));
    }

    /**
     * Gets the 'sonata.admin.route.query_string' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Route\QueryStringBuilder A Sonata\AdminBundle\Route\QueryStringBuilder instance.
     */
    protected function getSonata_Admin_Route_QueryStringService()
    {
        return $this->services['sonata.admin.route.query_string'] = new \Sonata\AdminBundle\Route\QueryStringBuilder($this->get('sonata.admin.audit.manager'));
    }

    /**
     * Gets the 'sonata.admin.route_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Route\AdminPoolLoader A Sonata\AdminBundle\Route\AdminPoolLoader instance.
     */
    protected function getSonata_Admin_RouteLoaderService()
    {
        return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader($this->get('sonata.admin.pool'), array(0 => 'sonata.media.admin.media', 1 => 'sonata.media.admin.gallery', 2 => 'sonata.media.admin.gallery_has_media', 3 => 'sonata.user.admin.user', 4 => 'sonata.user.admin.group', 5 => 'my.main.admin.interestings', 6 => 'my.main.admin.horoscop', 7 => 'my.main.admin.concurs', 8 => 'my.main.admin.realty', 9 => 'my.main.admin.news', 10 => 'my.main.admin.gallery', 11 => 'my.main.admin.ads', 12 => 'my.main.admin.slider'), $this);
    }

    /**
     * Gets the 'sonata.admin.search.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Search\SearchHandler A Sonata\AdminBundle\Search\SearchHandler instance.
     */
    protected function getSonata_Admin_Search_HandlerService()
    {
        return $this->services['sonata.admin.search.handler'] = new \Sonata\AdminBundle\Search\SearchHandler($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.security.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Security\Handler\RoleSecurityHandler A Sonata\AdminBundle\Security\Handler\RoleSecurityHandler instance.
     */
    protected function getSonata_Admin_Security_HandlerService()
    {
        return $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\RoleSecurityHandler($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE), array(0 => 'ROLE_SUPER_ADMIN'));
    }

    /**
     * Gets the 'sonata.admin.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Twig\Extension\SonataAdminExtension A Sonata\AdminBundle\Twig\Extension\SonataAdminExtension instance.
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        return $this->services['sonata.admin.twig.extension'] = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.twig.extension.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Extensions_Extension_Text A Twig_Extensions_Extension_Text instance.
     */
    protected function getSonata_Admin_Twig_Extension_TextService()
    {
        return $this->services['sonata.admin.twig.extension.text'] = new \Twig_Extensions_Extension_Text();
    }

    /**
     * Gets the 'sonata.admin.validator.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Validator\InlineValidator A Sonata\AdminBundle\Validator\InlineValidator instance.
     */
    protected function getSonata_Admin_Validator_InlineService()
    {
        return $this->services['sonata.admin.validator.inline'] = new \Sonata\AdminBundle\Validator\InlineValidator($this, $this->get('validator.validator_factory'));
    }

    /**
     * Gets the 'sonata.block.cache.handler.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Cache\HttpCacheHandler A Sonata\BlockBundle\Cache\HttpCacheHandler instance.
     */
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }

    /**
     * Gets the 'sonata.block.cache.handler.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Cache\NoopHttpCacheHandler A Sonata\BlockBundle\Cache\NoopHttpCacheHandler instance.
     */
    protected function getSonata_Block_Cache_Handler_NoopService()
    {
        return $this->services['sonata.block.cache.handler.noop'] = new \Sonata\BlockBundle\Cache\NoopHttpCacheHandler();
    }

    /**
     * Gets the 'sonata.block.context_manager.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Block\BlockContextManager A Sonata\BlockBundle\Block\BlockContextManager instance.
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager($this->get('sonata.block.loader.chain'), $this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop', 'sonata.block.service.text' => 'sonata.cache.noop', 'sonata.block.service.action' => 'sonata.cache.noop', 'sonata.block.service.rss' => 'sonata.cache.noop')));
    }

    /**
     * Gets the 'sonata.block.exception.filter.debug_only' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter A Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter instance.
     */
    protected function getSonata_Block_Exception_Filter_DebugOnlyService()
    {
        return $this->services['sonata.block.exception.filter.debug_only'] = new \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter(true);
    }

    /**
     * Gets the 'sonata.block.exception.filter.ignore_block_exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter A Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter instance.
     */
    protected function getSonata_Block_Exception_Filter_IgnoreBlockExceptionService()
    {
        return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
    }

    /**
     * Gets the 'sonata.block.exception.filter.keep_all' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Exception\Filter\KeepAllFilter A Sonata\BlockBundle\Exception\Filter\KeepAllFilter instance.
     */
    protected function getSonata_Block_Exception_Filter_KeepAllService()
    {
        return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
    }

    /**
     * Gets the 'sonata.block.exception.filter.keep_none' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Exception\Filter\KeepNoneFilter A Sonata\BlockBundle\Exception\Filter\KeepNoneFilter instance.
     */
    protected function getSonata_Block_Exception_Filter_KeepNoneService()
    {
        return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }

    /**
     * Gets the 'sonata.block.exception.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Exception\Renderer\InlineRenderer A Sonata\BlockBundle\Exception\Renderer\InlineRenderer instance.
     */
    protected function getSonata_Block_Exception_Renderer_InlineService()
    {
        return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception.html.twig');
    }

    /**
     * Gets the 'sonata.block.exception.renderer.inline_debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer A Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer instance.
     */
    protected function getSonata_Block_Exception_Renderer_InlineDebugService()
    {
        return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception_debug.html.twig', true, true);
    }

    /**
     * Gets the 'sonata.block.exception.renderer.throw' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer A Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer instance.
     */
    protected function getSonata_Block_Exception_Renderer_ThrowService()
    {
        return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }

    /**
     * Gets the 'sonata.block.exception.strategy.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Exception\Strategy\StrategyManager A Sonata\BlockBundle\Exception\Strategy\StrategyManager instance.
     */
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, array('debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'), array('inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'), array(), array());

        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('throw');

        return $instance;
    }

    /**
     * Gets the 'sonata.block.form.type.block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Form\Type\ServiceListType A Sonata\BlockBundle\Form\Type\ServiceListType instance.
     */
    protected function getSonata_Block_Form_Type_BlockService()
    {
        return $this->services['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType($this->get('sonata.block.manager'), array('admin' => array(0 => 'sonata.admin.block.admin_list'), 'cms' => array(0 => 'sonata.block.service.text', 1 => 'sonata.block.service.action', 2 => 'sonata.block.service.rss')));
    }

    /**
     * Gets the 'sonata.block.loader.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Block\BlockLoaderChain A Sonata\BlockBundle\Block\BlockLoaderChain instance.
     */
    protected function getSonata_Block_Loader_ChainService()
    {
        return $this->services['sonata.block.loader.chain'] = new \Sonata\BlockBundle\Block\BlockLoaderChain(array(0 => $this->get('sonata.block.loader.service')));
    }

    /**
     * Gets the 'sonata.block.loader.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Block\Loader\ServiceLoader A Sonata\BlockBundle\Block\Loader\ServiceLoader instance.
     */
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader(array(0 => 'sonata.admin.block.admin_list', 1 => 'sonata.block.service.text', 2 => 'sonata.block.service.action', 3 => 'sonata.block.service.rss'));
    }

    /**
     * Gets the 'sonata.block.renderer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Block\BlockRenderer A Sonata\BlockBundle\Block\BlockRenderer instance.
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer($this->get('sonata.block.manager'), $this->get('sonata.block.exception.strategy.manager'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE), true);
    }

    /**
     * Gets the 'sonata.block.service.empty' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Block\Service\EmptyBlockService A Sonata\BlockBundle\Block\Service\EmptyBlockService instance.
     */
    protected function getSonata_Block_Service_EmptyService()
    {
        return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Block\Service\MenuBlockService A Sonata\BlockBundle\Block\Service\MenuBlockService instance.
     */
    protected function getSonata_Block_Service_MenuService()
    {
        return $this->services['sonata.block.service.menu'] = new \Sonata\BlockBundle\Block\Service\MenuBlockService('sonata.block.menu', $this->get('templating'), $this->get('knp_menu.menu_provider'), array());
    }

    /**
     * Gets the 'sonata.block.service.rss' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Block\Service\RssBlockService A Sonata\BlockBundle\Block\Service\RssBlockService instance.
     */
    protected function getSonata_Block_Service_RssService()
    {
        return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Block\Service\TextBlockService A Sonata\BlockBundle\Block\Service\TextBlockService instance.
     */
    protected function getSonata_Block_Service_TextService()
    {
        return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.twig.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\BlockBundle\Twig\GlobalVariables A Sonata\BlockBundle\Twig\GlobalVariables instance.
     */
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables($this, array('block_base' => 'SonataBlockBundle:Block:block_base.html.twig'));
    }

    /**
     * Gets the 'sonata.cache.invalidation.simple' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\CacheBundle\Invalidation\SimpleCacheInvalidation A Sonata\CacheBundle\Invalidation\SimpleCacheInvalidation instance.
     */
    protected function getSonata_Cache_Invalidation_SimpleService()
    {
        return $this->services['sonata.cache.invalidation.simple'] = new \Sonata\CacheBundle\Invalidation\SimpleCacheInvalidation($this->get('logger'));
    }

    /**
     * Gets the 'sonata.cache.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\CacheBundle\Cache\CacheManager A Sonata\CacheBundle\Cache\CacheManager instance.
     */
    protected function getSonata_Cache_ManagerService()
    {
        $this->services['sonata.cache.manager'] = $instance = new \Sonata\CacheBundle\Cache\CacheManager($this->get('sonata.cache.invalidation.simple'), array('sonata.cache.noop' => $this->get('sonata.cache.noop')));

        $instance->setRecorder($this->get('sonata.cache.recorder'));

        return $instance;
    }

    /**
     * Gets the 'sonata.cache.model_identifier' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\CacheBundle\Invalidation\ModelCollectionIdentifiers A Sonata\CacheBundle\Invalidation\ModelCollectionIdentifiers instance.
     */
    protected function getSonata_Cache_ModelIdentifierService()
    {
        return $this->services['sonata.cache.model_identifier'] = new \Sonata\CacheBundle\Invalidation\ModelCollectionIdentifiers(array());
    }

    /**
     * Gets the 'sonata.cache.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\CacheBundle\Adapter\NoopCache A Sonata\CacheBundle\Adapter\NoopCache instance.
     */
    protected function getSonata_Cache_NoopService()
    {
        return $this->services['sonata.cache.noop'] = new \Sonata\CacheBundle\Adapter\NoopCache();
    }

    /**
     * Gets the 'sonata.cache.orm.event_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\CacheBundle\Invalidation\DoctrineORMListenerContainerAware A Sonata\CacheBundle\Invalidation\DoctrineORMListenerContainerAware instance.
     */
    protected function getSonata_Cache_Orm_EventSubscriberService()
    {
        return $this->services['sonata.cache.orm.event_subscriber'] = new \Sonata\CacheBundle\Invalidation\DoctrineORMListenerContainerAware($this, 'sonata.cache.orm.event_subscriber.default');
    }

    /**
     * Gets the 'sonata.cache.orm.event_subscriber.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\CacheBundle\Invalidation\DoctrineORMListener A Sonata\CacheBundle\Invalidation\DoctrineORMListener instance.
     */
    protected function getSonata_Cache_Orm_EventSubscriber_DefaultService()
    {
        return $this->services['sonata.cache.orm.event_subscriber.default'] = new \Sonata\CacheBundle\Invalidation\DoctrineORMListener($this->get('sonata.cache.model_identifier'), array('sonata.cache.noop' => $this->get('sonata.cache.noop')));
    }

    /**
     * Gets the 'sonata.cache.recorder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\CacheBundle\Invalidation\Recorder A Sonata\CacheBundle\Invalidation\Recorder instance.
     */
    protected function getSonata_Cache_RecorderService()
    {
        return $this->services['sonata.cache.recorder'] = new \Sonata\CacheBundle\Invalidation\Recorder($this->get('sonata.cache.model_identifier'));
    }

    /**
     * Gets the 'sonata.easy_extends.doctrine.mapper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper A Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper instance.
     */
    protected function getSonata_EasyExtends_Doctrine_MapperService()
    {
        $this->services['sonata.easy_extends.doctrine.mapper'] = $instance = new \Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper($this->get('doctrine'), array());

        $instance->addAssociation('MY\\MediaBundle\\Entity\\Media', 'mapOneToMany', array(0 => array('fieldName' => 'galleryHasMedias', 'targetEntity' => 'MY\\MediaBundle\\Entity\\GalleryHasMedia', 'cascade' => array(0 => 'persist'), 'mappedBy' => 'media', 'orphanRemoval' => false)));
        $instance->addAssociation('MY\\MediaBundle\\Entity\\GalleryHasMedia', 'mapManyToOne', array(0 => array('fieldName' => 'gallery', 'targetEntity' => 'MY\\MediaBundle\\Entity\\Gallery', 'cascade' => array(0 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => 'galleryHasMedias', 'joinColumns' => array(0 => array('name' => 'gallery_id', 'referencedColumnName' => 'id')), 'orphanRemoval' => false), 1 => array('fieldName' => 'media', 'targetEntity' => 'MY\\MediaBundle\\Entity\\Media', 'cascade' => array(0 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => 'galleryHasMedias', 'joinColumns' => array(0 => array('name' => 'media_id', 'referencedColumnName' => 'id')), 'orphanRemoval' => false)));
        $instance->addAssociation('MY\\MediaBundle\\Entity\\Gallery', 'mapOneToMany', array(0 => array('fieldName' => 'galleryHasMedias', 'targetEntity' => 'MY\\MediaBundle\\Entity\\GalleryHasMedia', 'cascade' => array(0 => 'persist'), 'mappedBy' => 'gallery', 'orphanRemoval' => true, 'orderBy' => array('position' => 'ASC'))));
        $instance->addAssociation('MY\\UserBundle\\Entity\\User', 'mapManyToMany', array(0 => array('fieldName' => 'groups', 'targetEntity' => 'MY\\UserBundle\\Entity\\Group', 'cascade' => array(), 'joinTable' => array('name' => 'fos_user_user_group', 'joinColumns' => array(0 => array('name' => 'user_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE')), 'inverseJoinColumns' => array(0 => array('name' => 'group_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE'))))));

        return $instance;
    }

    /**
     * Gets the 'sonata.easy_extends.generator.bundle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\EasyExtendsBundle\Generator\BundleGenerator A Sonata\EasyExtendsBundle\Generator\BundleGenerator instance.
     */
    protected function getSonata_EasyExtends_Generator_BundleService()
    {
        return $this->services['sonata.easy_extends.generator.bundle'] = new \Sonata\EasyExtendsBundle\Generator\BundleGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.odm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\EasyExtendsBundle\Generator\OdmGenerator A Sonata\EasyExtendsBundle\Generator\OdmGenerator instance.
     */
    protected function getSonata_EasyExtends_Generator_OdmService()
    {
        return $this->services['sonata.easy_extends.generator.odm'] = new \Sonata\EasyExtendsBundle\Generator\OdmGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\EasyExtendsBundle\Generator\OrmGenerator A Sonata\EasyExtendsBundle\Generator\OrmGenerator instance.
     */
    protected function getSonata_EasyExtends_Generator_OrmService()
    {
        return $this->services['sonata.easy_extends.generator.orm'] = new \Sonata\EasyExtendsBundle\Generator\OrmGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\EasyExtendsBundle\Generator\PHPCRGenerator A Sonata\EasyExtendsBundle\Generator\PHPCRGenerator instance.
     */
    protected function getSonata_EasyExtends_Generator_PhpcrService()
    {
        return $this->services['sonata.easy_extends.generator.phpcr'] = new \Sonata\EasyExtendsBundle\Generator\PHPCRGenerator();
    }

    /**
     * Gets the 'sonata.media.adapter.filesystem.local' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Filesystem\Local A Sonata\MediaBundle\Filesystem\Local instance.
     */
    protected function getSonata_Media_Adapter_Filesystem_LocalService()
    {
        return $this->services['sonata.media.adapter.filesystem.local'] = new \Sonata\MediaBundle\Filesystem\Local('/var/www/mynet/app/../web/uploads/media', false);
    }

    /**
     * Gets the 'sonata.media.adapter.image.gd' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Imagine\Gd\Imagine A Imagine\Gd\Imagine instance.
     */
    protected function getSonata_Media_Adapter_Image_GdService()
    {
        return $this->services['sonata.media.adapter.image.gd'] = new \Imagine\Gd\Imagine();
    }

    /**
     * Gets the 'sonata.media.adapter.image.gmagick' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Imagine\Gmagick\Imagine A Imagine\Gmagick\Imagine instance.
     */
    protected function getSonata_Media_Adapter_Image_GmagickService()
    {
        return $this->services['sonata.media.adapter.image.gmagick'] = new \Imagine\Gmagick\Imagine();
    }

    /**
     * Gets the 'sonata.media.adapter.image.imagick' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Imagine\Imagick\Imagine A Imagine\Imagick\Imagine instance.
     */
    protected function getSonata_Media_Adapter_Image_ImagickService()
    {
        return $this->services['sonata.media.adapter.image.imagick'] = new \Imagine\Imagick\Imagine();
    }

    /**
     * Gets the 'sonata.media.adapter.service.s3' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return AmazonS3 A AmazonS3 instance.
     */
    protected function getSonata_Media_Adapter_Service_S3Service()
    {
        return $this->services['sonata.media.adapter.service.s3'] = new \AmazonS3(array());
    }

    /**
     * Gets the 'sonata.media.admin.gallery' service.
     *
     * @return Sonata\MediaBundle\Admin\GalleryAdmin A Sonata\MediaBundle\Admin\GalleryAdmin instance.
     */
    protected function getSonata_Media_Admin_GalleryService()
    {
        $instance = new \Sonata\MediaBundle\Admin\GalleryAdmin('sonata.media.admin.gallery', 'MY\\MediaBundle\\Entity\\Gallery', 'SonataMediaBundle:GalleryAdmin', $this->get('sonata.media.pool'));

        $instance->setTranslationDomain('SonataMediaBundle');
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('gallery');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataMediaBundle:GalleryAdmin:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.admin.gallery_has_media' service.
     *
     * @return Sonata\MediaBundle\Admin\GalleryHasMediaAdmin A Sonata\MediaBundle\Admin\GalleryHasMediaAdmin instance.
     */
    protected function getSonata_Media_Admin_GalleryHasMediaService()
    {
        $instance = new \Sonata\MediaBundle\Admin\GalleryHasMediaAdmin('sonata.media.admin.gallery_has_media', 'MY\\MediaBundle\\Entity\\GalleryHasMedia', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataMediaBundle');
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('gallery_has_media');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.admin.media' service.
     *
     * @return MY\MediaBundle\Admin\ORM\MediaAdmin A MY\MediaBundle\Admin\ORM\MediaAdmin instance.
     */
    protected function getSonata_Media_Admin_MediaService()
    {
        $instance = new \MY\MediaBundle\Admin\ORM\MediaAdmin('sonata.media.admin.media', 'MY\\MediaBundle\\Entity\\Media', 'MYMediaBundle:MediaAdmin', $this->get('sonata.media.pool'));

        $instance->setModelManager($this->get('sonata.media.admin.media.manager'));
        $instance->setTranslationDomain('SonataMediaBundle');
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('media');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataMediaBundle:MediaAdmin:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.admin.media.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Admin\Manager\DoctrineORMManager A Sonata\MediaBundle\Admin\Manager\DoctrineORMManager instance.
     */
    protected function getSonata_Media_Admin_Media_ManagerService()
    {
        return $this->services['sonata.media.admin.media.manager'] = new \Sonata\MediaBundle\Admin\Manager\DoctrineORMManager($this->get('doctrine'), $this->get('sonata.media.manager.media'));
    }

    /**
     * Gets the 'sonata.media.block.feature_media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Block\FeatureMediaBlockService A Sonata\MediaBundle\Block\FeatureMediaBlockService instance.
     */
    protected function getSonata_Media_Block_FeatureMediaService()
    {
        return $this->services['sonata.media.block.feature_media'] = new \Sonata\MediaBundle\Block\FeatureMediaBlockService('sonata.media.block.feature_media', $this->get('templating'), $this, $this->get('sonata.media.manager.media'));
    }

    /**
     * Gets the 'sonata.media.block.gallery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Block\GalleryBlockService A Sonata\MediaBundle\Block\GalleryBlockService instance.
     */
    protected function getSonata_Media_Block_GalleryService()
    {
        return $this->services['sonata.media.block.gallery'] = new \Sonata\MediaBundle\Block\GalleryBlockService('sonata.media.block.gallery', $this->get('templating'), $this, $this->get('sonata.media.manager.gallery'));
    }

    /**
     * Gets the 'sonata.media.block.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Block\MediaBlockService A Sonata\MediaBundle\Block\MediaBlockService instance.
     */
    protected function getSonata_Media_Block_MediaService()
    {
        return $this->services['sonata.media.block.media'] = new \Sonata\MediaBundle\Block\MediaBlockService('sonata.media.block.media', $this->get('templating'), $this, $this->get('sonata.media.manager.media'));
    }

    /**
     * Gets the 'sonata.media.buzz.browser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Buzz\Browser A Buzz\Browser instance.
     */
    protected function getSonata_Media_Buzz_BrowserService()
    {
        return $this->services['sonata.media.buzz.browser'] = new \Buzz\Browser($this->get('sonata.media.buzz.connector.file_get_contents'));
    }

    /**
     * Gets the 'sonata.media.buzz.connector.curl' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Buzz\Client\Curl A Buzz\Client\Curl instance.
     */
    protected function getSonata_Media_Buzz_Connector_CurlService()
    {
        return $this->services['sonata.media.buzz.connector.curl'] = new \Buzz\Client\Curl();
    }

    /**
     * Gets the 'sonata.media.buzz.connector.file_get_contents' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Buzz\Client\FileGetContents A Buzz\Client\FileGetContents instance.
     */
    protected function getSonata_Media_Buzz_Connector_FileGetContentsService()
    {
        return $this->services['sonata.media.buzz.connector.file_get_contents'] = new \Buzz\Client\FileGetContents();
    }

    /**
     * Gets the 'sonata.media.cdn.server' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\CDN\Server A Sonata\MediaBundle\CDN\Server instance.
     */
    protected function getSonata_Media_Cdn_ServerService()
    {
        return $this->services['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('/uploads/media');
    }

    /**
     * Gets the 'sonata.media.doctrine.event_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Listener\ORM\MediaEventSubscriber A Sonata\MediaBundle\Listener\ORM\MediaEventSubscriber instance.
     */
    protected function getSonata_Media_Doctrine_EventSubscriberService()
    {
        return $this->services['sonata.media.doctrine.event_subscriber'] = new \Sonata\MediaBundle\Listener\ORM\MediaEventSubscriber($this);
    }

    /**
     * Gets the 'sonata.media.filesystem.local' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Gaufrette\Filesystem A Gaufrette\Filesystem instance.
     */
    protected function getSonata_Media_Filesystem_LocalService()
    {
        return $this->services['sonata.media.filesystem.local'] = new \Gaufrette\Filesystem($this->get('sonata.media.adapter.filesystem.local'));
    }

    /**
     * Gets the 'sonata.media.form.type.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Form\Type\MediaType A Sonata\MediaBundle\Form\Type\MediaType instance.
     */
    protected function getSonata_Media_Form_Type_MediaService()
    {
        return $this->services['sonata.media.form.type.media'] = new \Sonata\MediaBundle\Form\Type\MediaType($this->get('sonata.media.pool'), 'MY\\MediaBundle\\Entity\\Media');
    }

    /**
     * Gets the 'sonata.media.generator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Generator\DefaultGenerator A Sonata\MediaBundle\Generator\DefaultGenerator instance.
     */
    protected function getSonata_Media_Generator_DefaultService()
    {
        return $this->services['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator();
    }

    /**
     * Gets the 'sonata.media.manager.gallery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Entity\GalleryManager A Sonata\MediaBundle\Entity\GalleryManager instance.
     */
    protected function getSonata_Media_Manager_GalleryService()
    {
        return $this->services['sonata.media.manager.gallery'] = new \Sonata\MediaBundle\Entity\GalleryManager($this->get('doctrine.orm.default_entity_manager'), 'MY\\MediaBundle\\Entity\\Gallery');
    }

    /**
     * Gets the 'sonata.media.manager.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Entity\MediaManager A Sonata\MediaBundle\Entity\MediaManager instance.
     */
    protected function getSonata_Media_Manager_MediaService()
    {
        return $this->services['sonata.media.manager.media'] = new \Sonata\MediaBundle\Entity\MediaManager($this->get('sonata.media.pool'), $this->get('doctrine.orm.default_entity_manager'), 'MY\\MediaBundle\\Entity\\Media');
    }

    /**
     * Gets the 'sonata.media.metadata.amazon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Metadata\AmazonMetadataBuilder A Sonata\MediaBundle\Metadata\AmazonMetadataBuilder instance.
     */
    protected function getSonata_Media_Metadata_AmazonService()
    {
        return $this->services['sonata.media.metadata.amazon'] = new \Sonata\MediaBundle\Metadata\AmazonMetadataBuilder();
    }

    /**
     * Gets the 'sonata.media.metadata.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Metadata\NoopMetadataBuilder A Sonata\MediaBundle\Metadata\NoopMetadataBuilder instance.
     */
    protected function getSonata_Media_Metadata_NoopService()
    {
        return $this->services['sonata.media.metadata.noop'] = new \Sonata\MediaBundle\Metadata\NoopMetadataBuilder();
    }

    /**
     * Gets the 'sonata.media.metadata.proxy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Metadata\ProxyMetadataBuilder A Sonata\MediaBundle\Metadata\ProxyMetadataBuilder instance.
     */
    protected function getSonata_Media_Metadata_ProxyService()
    {
        return $this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this, array());
    }

    /**
     * Gets the 'sonata.media.pool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Provider\Pool A Sonata\MediaBundle\Provider\Pool instance.
     */
    protected function getSonata_Media_PoolService()
    {
        $this->services['sonata.media.pool'] = $instance = new \Sonata\MediaBundle\Provider\Pool('default');

        $instance->addContext('default', array(0 => 'sonata.media.provider.dailymotion', 1 => 'sonata.media.provider.youtube', 2 => 'sonata.media.provider.image', 3 => 'sonata.media.provider.file'), array('default_list' => array('width' => 200, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true), 'default_homepage' => array('width' => 225, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true), 'default_lightbox' => array('width' => 700, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true)), array('strategy' => 'sonata.media.security.public_strategy', 'mode' => 'http'));
        $instance->addContext('news_gallery', array(0 => 'sonata.media.provider.image'), array('news_gallery_list' => array('width' => 225, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true)), array('strategy' => 'sonata.media.security.superadmin_strategy', 'mode' => 'http'));
        $instance->addContext('slider', array(0 => 'sonata.media.provider.image'), array('slider_list' => array('width' => 180, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true)), array('strategy' => 'sonata.media.security.superadmin_strategy', 'mode' => 'http'));
        $instance->addContext('ads', array(0 => 'sonata.media.provider.image'), array('ads_right' => array('width' => 180, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true), 'ads_left' => array('width' => 240, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true)), array('strategy' => 'sonata.media.security.superadmin_strategy', 'mode' => 'http'));
        $instance->addDownloadSecurity('sonata.media.security.public_strategy', $this->get('sonata.media.security.public_strategy'));
        $instance->addDownloadSecurity('sonata.media.security.superadmin_strategy', $this->get('sonata.media.security.superadmin_strategy'));
        $instance->addProvider('sonata.media.provider.image', $this->get('sonata.media.provider.image'));
        $instance->addProvider('sonata.media.provider.file', $this->get('sonata.media.provider.file'));
        $instance->addProvider('sonata.media.provider.youtube', $this->get('sonata.media.provider.youtube'));
        $instance->addProvider('sonata.media.provider.dailymotion', $this->get('sonata.media.provider.dailymotion'));
        $instance->addProvider('sonata.media.provider.vimeo', $this->get('sonata.media.provider.vimeo'));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.dailymotion' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Provider\DailyMotionProvider A Sonata\MediaBundle\Provider\DailyMotionProvider instance.
     */
    protected function getSonata_Media_Provider_DailymotionService()
    {
        $this->services['sonata.media.provider.dailymotion'] = $instance = new \Sonata\MediaBundle\Provider\DailyMotionProvider('sonata.media.provider.dailymotion', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), $this->get('sonata.media.buzz.browser'), $this->get('sonata.media.metadata.proxy'));

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_dailymotion.html.twig'));
        $instance->addFormat('default_list', array('width' => 200, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_homepage', array('width' => 225, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_lightbox', array('width' => 700, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->setResizer($this->get('sonata.media.resizer.simple'));
        $instance->addFormat('admin', array('quality' => 80, 'width' => 100, 'format' => 'jpg', 'height' => false, 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Provider\FileProvider A Sonata\MediaBundle\Provider\FileProvider instance.
     */
    protected function getSonata_Media_Provider_FileService()
    {
        $this->services['sonata.media.provider.file'] = $instance = new \Sonata\MediaBundle\Provider\FileProvider('sonata.media.provider.file', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), array(0 => 'pdf', 1 => 'jpg', 2 => 'txt', 3 => 'rtf', 4 => 'doc', 5 => 'docx', 6 => 'xls', 7 => 'xlsx', 8 => 'ppt', 9 => 'pttx', 10 => 'odt', 11 => 'odg', 12 => 'odp', 13 => 'ods', 14 => 'odc', 15 => 'odf', 16 => 'odb', 17 => 'csv', 18 => 'xml', 19 => 'zip', 20 => 'rar'), array(0 => 'application/pdf', 1 => 'application/x-pdf', 2 => 'application/rtf', 3 => 'text/html', 4 => 'text/rtf', 5 => 'text/plain', 6 => 'application/excel', 7 => 'application/msword', 8 => 'application/vnd.ms-excel', 9 => 'application/vnd.ms-powerpoint', 10 => 'application/vnd.ms-powerpoint', 11 => 'application/vnd.oasis.opendocument.text', 12 => 'application/vnd.oasis.opendocument.graphics', 13 => 'application/vnd.oasis.opendocument.presentation', 14 => 'application/vnd.oasis.opendocument.spreadsheet', 15 => 'application/vnd.oasis.opendocument.chart', 16 => 'application/vnd.oasis.opendocument.formula', 17 => 'application/vnd.oasis.opendocument.database', 18 => 'application/vnd.oasis.opendocument.image', 19 => 'text/comma-separated-values', 20 => 'text/xml', 21 => 'application/xml', 22 => 'application/zip'), $this->get('sonata.media.metadata.proxy'));

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_file.html.twig'));
        $instance->addFormat('default_list', array('width' => 200, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_homepage', array('width' => 225, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_lightbox', array('width' => 700, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('admin', array('quality' => 80, 'width' => 100, 'format' => 'jpg', 'height' => false, 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Provider\ImageProvider A Sonata\MediaBundle\Provider\ImageProvider instance.
     */
    protected function getSonata_Media_Provider_ImageService()
    {
        $this->services['sonata.media.provider.image'] = $instance = new \Sonata\MediaBundle\Provider\ImageProvider('sonata.media.provider.image', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), array(0 => 'jpg', 1 => 'png', 2 => 'jpeg'), array(0 => 'image/pjpeg', 1 => 'image/jpeg', 2 => 'image/png', 3 => 'image/x-png'), $this->get('sonata.media.adapter.image.gd'), $this->get('sonata.media.metadata.proxy'));

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_image.html.twig'));
        $instance->addFormat('default_list', array('width' => 200, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_homepage', array('width' => 225, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_lightbox', array('width' => 700, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('news_gallery_list', array('width' => 225, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('slider_list', array('width' => 180, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('ads_right', array('width' => 180, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('ads_left', array('width' => 240, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->setResizer($this->get('sonata.media.resizer.simple'));
        $instance->addFormat('admin', array('quality' => 80, 'width' => 100, 'format' => 'jpg', 'height' => false, 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.vimeo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Provider\VimeoProvider A Sonata\MediaBundle\Provider\VimeoProvider instance.
     */
    protected function getSonata_Media_Provider_VimeoService()
    {
        $this->services['sonata.media.provider.vimeo'] = $instance = new \Sonata\MediaBundle\Provider\VimeoProvider('sonata.media.provider.vimeo', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), $this->get('sonata.media.buzz.browser'), $this->get('sonata.media.metadata.proxy'));

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_vimeo.html.twig'));
        $instance->setResizer($this->get('sonata.media.resizer.simple'));
        $instance->addFormat('admin', array('quality' => 80, 'width' => 100, 'format' => 'jpg', 'height' => false, 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.youtube' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Provider\YouTubeProvider A Sonata\MediaBundle\Provider\YouTubeProvider instance.
     */
    protected function getSonata_Media_Provider_YoutubeService()
    {
        $this->services['sonata.media.provider.youtube'] = $instance = new \Sonata\MediaBundle\Provider\YouTubeProvider('sonata.media.provider.youtube', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), $this->get('sonata.media.buzz.browser'), $this->get('sonata.media.metadata.proxy'), false);

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_youtube.html.twig'));
        $instance->addFormat('default_list', array('width' => 200, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_homepage', array('width' => 225, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_lightbox', array('width' => 700, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->setResizer($this->get('sonata.media.resizer.simple'));
        $instance->addFormat('admin', array('quality' => 80, 'width' => 100, 'format' => 'jpg', 'height' => false, 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.resizer.simple' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Resizer\SimpleResizer A Sonata\MediaBundle\Resizer\SimpleResizer instance.
     */
    protected function getSonata_Media_Resizer_SimpleService()
    {
        return $this->services['sonata.media.resizer.simple'] = new \Sonata\MediaBundle\Resizer\SimpleResizer($this->get('sonata.media.adapter.image.gd'), 'inset', $this->get('sonata.media.metadata.proxy'));
    }

    /**
     * Gets the 'sonata.media.resizer.square' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Resizer\SquareResizer A Sonata\MediaBundle\Resizer\SquareResizer instance.
     */
    protected function getSonata_Media_Resizer_SquareService()
    {
        return $this->services['sonata.media.resizer.square'] = new \Sonata\MediaBundle\Resizer\SquareResizer($this->get('sonata.media.adapter.image.gd'), 'inset', $this->get('sonata.media.metadata.proxy'));
    }

    /**
     * Gets the 'sonata.media.security.connected_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Security\RolesDownloadStrategy A Sonata\MediaBundle\Security\RolesDownloadStrategy instance.
     */
    protected function getSonata_Media_Security_ConnectedStrategyService()
    {
        return $this->services['sonata.media.security.connected_strategy'] = new \Sonata\MediaBundle\Security\RolesDownloadStrategy($this->get('translator.default'), $this->get('security.context'), array(0 => 'IS_AUTHENTICATED_FULLY', 1 => 'IS_AUTHENTICATED_REMEMBERED'));
    }

    /**
     * Gets the 'sonata.media.security.forbidden_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Security\ForbiddenDownloadStrategy A Sonata\MediaBundle\Security\ForbiddenDownloadStrategy instance.
     */
    protected function getSonata_Media_Security_ForbiddenStrategyService()
    {
        return $this->services['sonata.media.security.forbidden_strategy'] = new \Sonata\MediaBundle\Security\ForbiddenDownloadStrategy($this->get('translator.default'));
    }

    /**
     * Gets the 'sonata.media.security.public_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Security\PublicDownloadStrategy A Sonata\MediaBundle\Security\PublicDownloadStrategy instance.
     */
    protected function getSonata_Media_Security_PublicStrategyService()
    {
        return $this->services['sonata.media.security.public_strategy'] = new \Sonata\MediaBundle\Security\PublicDownloadStrategy($this->get('translator.default'));
    }

    /**
     * Gets the 'sonata.media.security.superadmin_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Security\RolesDownloadStrategy A Sonata\MediaBundle\Security\RolesDownloadStrategy instance.
     */
    protected function getSonata_Media_Security_SuperadminStrategyService()
    {
        return $this->services['sonata.media.security.superadmin_strategy'] = new \Sonata\MediaBundle\Security\RolesDownloadStrategy($this->get('translator.default'), $this->get('security.context'), array(0 => 'ROLE_SUPER_ADMIN', 1 => 'ROLE_ADMIN'));
    }

    /**
     * Gets the 'sonata.media.thumbnail.format' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Thumbnail\FormatThumbnail A Sonata\MediaBundle\Thumbnail\FormatThumbnail instance.
     */
    protected function getSonata_Media_Thumbnail_FormatService()
    {
        return $this->services['sonata.media.thumbnail.format'] = new \Sonata\MediaBundle\Thumbnail\FormatThumbnail('jpg');
    }

    /**
     * Gets the 'sonata.media.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Twig\Extension\MediaExtension A Sonata\MediaBundle\Twig\Extension\MediaExtension instance.
     */
    protected function getSonata_Media_Twig_ExtensionService()
    {
        return $this->services['sonata.media.twig.extension'] = new \Sonata\MediaBundle\Twig\Extension\MediaExtension($this->get('sonata.media.pool'), $this->get('sonata.media.manager.media'));
    }

    /**
     * Gets the 'sonata.media.validator.format' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\MediaBundle\Validator\FormatValidator A Sonata\MediaBundle\Validator\FormatValidator instance.
     */
    protected function getSonata_Media_Validator_FormatService()
    {
        return $this->services['sonata.media.validator.format'] = new \Sonata\MediaBundle\Validator\FormatValidator($this->get('sonata.media.pool'));
    }

    /**
     * Gets the 'sonata.user.admin.group' service.
     *
     * @return Sonata\UserBundle\Admin\Entity\GroupAdmin A Sonata\UserBundle\Admin\Entity\GroupAdmin instance.
     */
    protected function getSonata_User_Admin_GroupService()
    {
        $instance = new \Sonata\UserBundle\Admin\Entity\GroupAdmin('sonata.user.admin.group', 'MY\\UserBundle\\Entity\\Group', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('groups');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the 'sonata.user.admin.user' service.
     *
     * @return Sonata\UserBundle\Admin\Entity\UserAdmin A Sonata\UserBundle\Admin\Entity\UserAdmin instance.
     */
    protected function getSonata_User_Admin_UserService()
    {
        $instance = new \Sonata\UserBundle\Admin\Entity\UserAdmin('sonata.user.admin.user', 'MY\\UserBundle\\Entity\\User', 'SonataAdminBundle:CRUD');

        $instance->setUserManager($this->get('fos_user.user_manager'));
        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('users');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the 'sonata.user.authentication.form_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Handler\ProfileFormHandler A FOS\UserBundle\Form\Handler\ProfileFormHandler instance.
     * 
     * @throws InactiveScopeException when the 'sonata.user.authentication.form_handler' service is requested while the 'request' scope is not active
     */
    protected function getSonata_User_Authentication_FormHandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sonata.user.authentication.form_handler', 'request');
        }

        return $this->services['sonata.user.authentication.form_handler'] = $this->scopedServices['request']['sonata.user.authentication.form_handler'] = new \FOS\UserBundle\Form\Handler\ProfileFormHandler($this->get('fos_user.profile.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'sonata.user.block.account' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\UserBundle\Block\AccountBlockService A Sonata\UserBundle\Block\AccountBlockService instance.
     */
    protected function getSonata_User_Block_AccountService()
    {
        return $this->services['sonata.user.block.account'] = new \Sonata\UserBundle\Block\AccountBlockService('sonata.user.block.account', $this->get('templating'), $this->get('security.context'));
    }

    /**
     * Gets the 'sonata.user.block.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\UserBundle\Block\ProfileMenuBlockService A Sonata\UserBundle\Block\ProfileMenuBlockService instance.
     */
    protected function getSonata_User_Block_MenuService()
    {
        return $this->services['sonata.user.block.menu'] = new \Sonata\UserBundle\Block\ProfileMenuBlockService('sonata.user.block.menu', $this->get('templating'), $this->get('knp_menu.menu_provider'), $this->get('sonata.user.profile.menu_builder'));
    }

    /**
     * Gets the 'sonata.user.editable_role_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\UserBundle\Security\EditableRolesBuilder A Sonata\UserBundle\Security\EditableRolesBuilder instance.
     */
    protected function getSonata_User_EditableRoleBuilderService()
    {
        return $this->services['sonata.user.editable_role_builder'] = new \Sonata\UserBundle\Security\EditableRolesBuilder($this->get('security.context'), $this->get('sonata.admin.pool'), array('ROLE_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_SONATA_ADMIN'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH')));
    }

    /**
     * Gets the 'sonata.user.form.gender_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\AdminBundle\Form\Type\StatusType A Sonata\AdminBundle\Form\Type\StatusType instance.
     */
    protected function getSonata_User_Form_GenderListService()
    {
        return $this->services['sonata.user.form.gender_list'] = new \Sonata\AdminBundle\Form\Type\StatusType('MY\\UserBundle\\Entity\\User', 'getGenderList', 'sonata_user_gender');
    }

    /**
     * Gets the 'sonata.user.form.type.security_roles' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\UserBundle\Form\Type\SecurityRolesType A Sonata\UserBundle\Form\Type\SecurityRolesType instance.
     */
    protected function getSonata_User_Form_Type_SecurityRolesService()
    {
        return $this->services['sonata.user.form.type.security_roles'] = new \Sonata\UserBundle\Form\Type\SecurityRolesType($this->get('sonata.user.editable_role_builder'));
    }

    /**
     * Gets the 'sonata.user.profile.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getSonata_User_Profile_FormService()
    {
        return $this->services['sonata.user.profile.form'] = $this->get('form.factory')->createNamed('sonata_user_profile_form', 'sonata_user_profile', NULL, array('validation_groups' => array(0 => 'Profile', 1 => 'Default'), 'translation_domain' => 'SonataUserBundle'));
    }

    /**
     * Gets the 'sonata.user.profile.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\UserBundle\Form\Handler\ProfileFormHandler A Sonata\UserBundle\Form\Handler\ProfileFormHandler instance.
     * 
     * @throws InactiveScopeException when the 'sonata.user.profile.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getSonata_User_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sonata.user.profile.form.handler', 'request');
        }

        return $this->services['sonata.user.profile.form.handler'] = $this->scopedServices['request']['sonata.user.profile.form.handler'] = new \Sonata\UserBundle\Form\Handler\ProfileFormHandler($this->get('sonata.user.profile.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'sonata.user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\UserBundle\Form\Type\ProfileType A Sonata\UserBundle\Form\Type\ProfileType instance.
     */
    protected function getSonata_User_Profile_Form_TypeService()
    {
        return $this->services['sonata.user.profile.form.type'] = new \Sonata\UserBundle\Form\Type\ProfileType('MY\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'sonata.user.profile.menu_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\UserBundle\Menu\ProfileMenuBuilder A Sonata\UserBundle\Menu\ProfileMenuBuilder instance.
     */
    protected function getSonata_User_Profile_MenuBuilderService()
    {
        return $this->services['sonata.user.profile.menu_builder'] = new \Sonata\UserBundle\Menu\ProfileMenuBuilder($this->get('knp_menu.factory'), $this->get('translator.default'), array(0 => array('route' => 'sonata_user_profile_edit', 'label' => 'link_edit_profile', 'domain' => 'SonataUserBundle', 'route_parameters' => array()), 1 => array('route' => 'sonata_user_profile_edit_authentication', 'label' => 'link_edit_authentication', 'domain' => 'SonataUserBundle', 'route_parameters' => array())), $this->get('event_dispatcher'));
    }

    /**
     * Gets the 'sonata.user.twig.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sonata\UserBundle\Twig\GlobalVariables A Sonata\UserBundle\Twig\GlobalVariables instance.
     */
    protected function getSonata_User_Twig_GlobalService()
    {
        return $this->services['sonata.user.twig.global'] = new \Sonata\UserBundle\Twig\GlobalVariables($this);
    }

    /**
     * Gets the 'stof_doctrine_extensions.event_listener.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Stof\DoctrineExtensionsBundle\EventListener\LocaleListener A Stof\DoctrineExtensionsBundle\EventListener\LocaleListener instance.
     */
    protected function getStofDoctrineExtensions_EventListener_LocaleService()
    {
        return $this->services['stof_doctrine_extensions.event_listener.locale'] = new \Stof\DoctrineExtensionsBundle\EventListener\LocaleListener($this->get('stof_doctrine_extensions.listener.translatable'));
    }

    /**
     * Gets the 'stof_doctrine_extensions.uploadable.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager A Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager instance.
     */
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');

        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance.
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance.
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this);
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Mailer A Swift_Mailer instance.
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance.
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_MemorySpool A Swift_MemorySpool instance.
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()))), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setUsername(NULL);
        $instance->setPassword(NULL);
        $instance->setAuthMode(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine A Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine instance.
     */
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setDefaultEscapingStrategy(array(0 => $instance, 1 => 'guessDefaultEscapingStrategy'));

        return $instance;
    }

    /**
     * Gets the 'templating.asset.package_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory A Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory instance.
     */
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance.
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.globals' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables A Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables instance.
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper instance.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\CoreAssetsHelper A Symfony\Component\Templating\Helper\CoreAssetsHelper instance.
     * 
     * @throws InactiveScopeException when the 'templating.helper.assets' service is requested while the 'request' scope is not active
     */
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }

        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }

    /**
     * Gets the 'templating.helper.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper instance.
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, '/var/www/mynet/app', 'UTF-8');
    }

    /**
     * Gets the 'templating.helper.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper instance.
     */
    protected function getTemplating_Helper_FormService()
    {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($this->get('debug.templating.engine.php'), array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance.
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('router'));

        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL);
        $instance->registerListener('public', '/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper instance.
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper instance.
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\SlotsHelper A Symfony\Component\Templating\Helper\SlotsHelper instance.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the 'templating.helper.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper instance.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance.
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance.
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance.
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance.
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance.
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance.
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance.
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance.
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance.
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance.
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance.
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance.
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance.
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance.
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance.
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance.
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance.
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance.
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance.
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini')), array('cache_dir' => '/var/www/mynet/app/cache/de_/translations', 'debug' => true));

        $instance->setFallbackLocales(array(0 => 'en'));
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf', 'tr', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf', 'sq', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf', 'af', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf', 'no', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf', 'cy', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf', 'lv', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ua.xlf', 'ua', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.de.xlf', 'de', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sr_Latn.xlf', 'sr_Latn', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.lb.xlf', 'lb', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.tr.xlf', 'tr', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ro.xlf', 'ro', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.no.xlf', 'no', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.hu.xlf', 'hu', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.nl.xlf', 'nl', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sl.xlf', 'sl', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ua.xlf', 'ua', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.es.xlf', 'es', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pt_PT.xlf', 'pt_PT', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.da.xlf', 'da', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sr_Cyrl.xlf', 'sr_Cyrl', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.en.xlf', 'en', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ca.xlf', 'ca', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ru.xlf', 'ru', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pt_BR.xlf', 'pt_BR', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.cs.xlf', 'cs', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.el.xlf', 'el', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.gl.xlf', 'gl', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ja.xlf', 'ja', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.fr.xlf', 'fr', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.it.xlf', 'it', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sv.xlf', 'sv', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sk.xlf', 'sk', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.fa.xlf', 'fa', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pl.xlf', 'pl', 'security');
        $instance->addResource('xlf', '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ar.xlf', 'ar', 'security');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.it.xliff', 'it', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.lt.xliff', 'lt', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.ja.xliff', 'ja', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.hu.xliff', 'hu', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.pl.xliff', 'pl', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.pt_BR.xliff', 'pt_BR', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.ro.xliff', 'ro', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.eu.xliff', 'eu', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.uk.xliff', 'uk', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.es.xliff', 'es', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.fa.xliff', 'fa', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.fr.xliff', 'fr', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.nl.xliff', 'nl', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.bg.xliff', 'bg', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.ca.xliff', 'ca', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.hr.xliff', 'hr', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.en.xliff', 'en', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.sl.xliff', 'sl', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.ru.xliff', 'ru', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.de.xliff', 'de', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.lb.xliff', 'lb', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.cs.xliff', 'cs', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.zh_CN.xliff', 'zh_CN', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.pt.xliff', 'pt', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.sk.xliff', 'sk', 'SonataAdminBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/media-bundle/Sonata/MediaBundle/Resources/translations/SonataMediaBundle.pl.xliff', 'pl', 'SonataMediaBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/media-bundle/Sonata/MediaBundle/Resources/translations/SonataMediaBundle.de.xliff', 'de', 'SonataMediaBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/media-bundle/Sonata/MediaBundle/Resources/translations/SonataMediaBundle.es.xliff', 'es', 'SonataMediaBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/media-bundle/Sonata/MediaBundle/Resources/translations/SonataMediaBundle.fr.xliff', 'fr', 'SonataMediaBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/media-bundle/Sonata/MediaBundle/Resources/translations/SonataMediaBundle.sl.xliff', 'sl', 'SonataMediaBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/media-bundle/Sonata/MediaBundle/Resources/translations/SonataMediaBundle.en.xliff', 'en', 'SonataMediaBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/media-bundle/Sonata/MediaBundle/Resources/translations/SonataMediaBundle.nl.xliff', 'nl', 'SonataMediaBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/media-bundle/Sonata/MediaBundle/Resources/translations/SonataMediaBundle.lt.xliff', 'lt', 'SonataMediaBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.ca.xliff', 'ca', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.cs.xliff', 'cs', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.es.xliff', 'es', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.de.xliff', 'de', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.zh_TW.xliff', 'zh_TW', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.pt.xliff', 'pt', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.fa.xliff', 'fa', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.fr.xliff', 'fr', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.en.xliff', 'en', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.ru.xliff', 'ru', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.sk.xliff', 'sk', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.it.xliff', 'it', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.pl.xliff', 'pl', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.nl.xliff', 'nl', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.sl.xliff', 'sl', 'SonataUserBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.bg.xliff', 'bg', 'SonataUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fi.yml', 'fi', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.cs.yml', 'cs', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.en.yml', 'en', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ru.yml', 'ru', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.nl.yml', 'nl', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sk.yml', 'sk', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lv.yml', 'lv', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.uk.yml', 'uk', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.de.yml', 'de', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.da.yml', 'da', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.zh_CN.yml', 'zh_CN', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_PT.yml', 'pt_PT', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_BR.yml', 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.tr.yml', 'tr', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ja.yml', 'ja', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hu.yml', 'hu', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.it.yml', 'it', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fa.yml', 'fa', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.es.yml', 'es', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lb.yml', 'lb', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fr.yml', 'fr', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lv.yml', 'lv', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sl.yml', 'sl', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt_BR.yml', 'pt_BR', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lt.yml', 'lt', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sv.yml', 'sv', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.zh_CN.yml', 'zh_CN', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ro.yml', 'ro', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sr_Latn.yml', 'sr_Latn', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lt.yml', 'lt', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fa.yml', 'fa', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sr_Latn.yml', 'sr_Latn', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hr.yml', 'hr', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.bg.yml', 'bg', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ca.yml', 'ca', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pl.yml', 'pl', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.et.yml', 'et', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/genemu/form-bundle/Genemu/Bundle/FormBundle/Resources/translations/validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/genemu/form-bundle/Genemu/Bundle/FormBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/var/www/mynet/vendor/genemu/form-bundle/Genemu/Bundle/FormBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('xliff', '/var/www/mynet/vendor/rodchyn/cron-manager-bundle/BCC/CronManagerBundle/Resources/translations/BCCCronManagerBundle.de.xliff', 'de', 'BCCCronManagerBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/rodchyn/cron-manager-bundle/BCC/CronManagerBundle/Resources/translations/BCCCronManagerBundle.en.xliff', 'en', 'BCCCronManagerBundle');
        $instance->addResource('xliff', '/var/www/mynet/vendor/rodchyn/cron-manager-bundle/BCC/CronManagerBundle/Resources/translations/BCCCronManagerBundle.fr.xliff', 'fr', 'BCCCronManagerBundle');
        $instance->addResource('yml', '/var/www/mynet/src/MY/MainBundle/Resources/translations/messages.en.yml', 'en', 'messages');
        $instance->addResource('xliff', '/var/www/mynet/src/MY/UserBundle/Resources/translations/messages.am.xliff', 'am', 'messages');
        $instance->addResource('xlf', '/var/www/mynet/src/MY/MediaBundle/Resources/translations/messages.am.xlf', 'am', 'messages');
        $instance->addResource('xlf', '/var/www/mynet/src/MY/MediaBundle/Resources/translations/messages.en.xlf', 'en', 'messages');

        return $instance;
    }

    /**
     * Gets the 'trsteel_ckeditor.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Trsteel\CkeditorBundle\Form\Type\CkeditorType A Trsteel\CkeditorBundle\Form\Type\CkeditorType instance.
     */
    protected function getTrsteelCkeditor_Form_TypeService()
    {
        $this->services['trsteel_ckeditor.form.type'] = $instance = new \Trsteel\CkeditorBundle\Form\Type\CkeditorType($this);

        $instance->addTransformer($this->get('trsteel_ckeditor.transformer.strip_js'), 'strip_js');
        $instance->addTransformer($this->get('trsteel_ckeditor.transformer.strip_css'), 'strip_css');
        $instance->addTransformer($this->get('trsteel_ckeditor.transformer.strip_comments'), 'strip_comments');

        return $instance;
    }

    /**
     * Gets the 'trsteel_ckeditor.transformer.strip_comments' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Trsteel\CkeditorBundle\Form\Transformer\StripComments A Trsteel\CkeditorBundle\Form\Transformer\StripComments instance.
     */
    protected function getTrsteelCkeditor_Transformer_StripCommentsService()
    {
        return $this->services['trsteel_ckeditor.transformer.strip_comments'] = new \Trsteel\CkeditorBundle\Form\Transformer\StripComments();
    }

    /**
     * Gets the 'trsteel_ckeditor.transformer.strip_css' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Trsteel\CkeditorBundle\Form\Transformer\StripCSS A Trsteel\CkeditorBundle\Form\Transformer\StripCSS instance.
     */
    protected function getTrsteelCkeditor_Transformer_StripCssService()
    {
        return $this->services['trsteel_ckeditor.transformer.strip_css'] = new \Trsteel\CkeditorBundle\Form\Transformer\StripCSS();
    }

    /**
     * Gets the 'trsteel_ckeditor.transformer.strip_js' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Trsteel\CkeditorBundle\Form\Transformer\StripJS A Trsteel\CkeditorBundle\Form\Transformer\StripJS instance.
     */
    protected function getTrsteelCkeditor_Transformer_StripJsService()
    {
        return $this->services['trsteel_ckeditor.transformer.strip_js'] = new \Trsteel\CkeditorBundle\Form\Transformer\StripJS();
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $a = $this->get('security.context');

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape_service' => NULL, 'autoescape_service_method' => NULL, 'cache' => '/var/www/mynet/app/cache/de_/twig', 'charset' => 'UTF-8', 'paths' => array()));

        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, '/var/www/mynet/app', 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension($this->get('twig.form.renderer')));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(0 => 'MYMainBundle', 1 => 'MYUserBundle', 2 => 'FOSUserBundle', 3 => 'TwigBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \JMS\SecurityExtraBundle\Twig\SecurityExtension($a));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension($this->get('sonata.block.templating.helper')));
        $instance->addExtension($this->get('sonata.admin.twig.extension'));
        $instance->addExtension($this->get('sonata.admin.twig.extension.text'));
        $instance->addExtension($this->get('sonata.media.twig.extension'));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        $instance->addExtension($this->get('twig.extension.stfalcon_tinymce'));
        $instance->addExtension($this->get('knp_paginator.twig.extension.pagination'));
        $instance->addExtension($this->get('genemu.twig.extension.form'));
        $instance->addExtension($this->get('fos_facebook.twig'));
        $instance->addExtension(new \BCC\CronManagerBundle\Twig\TwigExtension('/var/www/mynet/app/logs', '/var/www/mynet/app'));
        $instance->addExtension(new \MY\MainBundle\Twig\Extension\PageRouteExtension($this));
        $instance->addGlobal('app', $this->get('templating.globals'));
        $instance->addGlobal('facebook_app_id', 'sovorel.am');
        $instance->addGlobal('facebook_server_url', 'sovorel.am');
        $instance->addGlobal('languages', array('en' => 'EN'));
        $instance->addGlobal('sonata_block', $this->get('sonata.block.twig.global'));
        $instance->addGlobal('sonata_user', $this->get('sonata.user.twig.global'));

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.extension.stfalcon_tinymce' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension A Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension instance.
     */
    protected function getTwig_Extension_StfalconTinymceService()
    {
        return $this->services['twig.extension.stfalcon_tinymce'] = new \Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension($this);
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath('/var/www/mynet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', 'Framework');
        $instance->addPath('/var/www/mynet/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', 'Security');
        $instance->addPath('/var/www/mynet/app/Resources/TwigBundle/views', 'Twig');
        $instance->addPath('/var/www/mynet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', 'Twig');
        $instance->addPath('/var/www/mynet/vendor/symfony/swiftmailer-bundle/Symfony/Bundle/SwiftmailerBundle/Resources/views', 'Swiftmailer');
        $instance->addPath('/var/www/mynet/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views', 'Doctrine');
        $instance->addPath('/var/www/mynet/vendor/sonata-project/block-bundle/Sonata/BlockBundle/Resources/views', 'SonataBlock');
        $instance->addPath('/var/www/mynet/app/Resources/SonataAdminBundle/views', 'SonataAdmin');
        $instance->addPath('/var/www/mynet/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/views', 'SonataAdmin');
        $instance->addPath('/var/www/mynet/vendor/sonata-project/doctrine-orm-admin-bundle/Sonata/DoctrineORMAdminBundle/Resources/views', 'SonataDoctrineORMAdmin');
        $instance->addPath('/var/www/mynet/vendor/sonata-project/media-bundle/Sonata/MediaBundle/Resources/views', 'SonataMedia');
        $instance->addPath('/var/www/mynet/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/views', 'SonataUser');
        $instance->addPath('/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views', 'FOSUser');
        $instance->addPath('/var/www/mynet/app/Resources/A2lixTranslationFormBundle/views', 'A2lixTranslationForm');
        $instance->addPath('/var/www/mynet/vendor/a2lix/translation-form-bundle/A2lix/TranslationFormBundle/Resources/views', 'A2lixTranslationForm');
        $instance->addPath('/var/www/mynet/vendor/stfalcon/tinymce-bundle/Stfalcon/Bundle/TinymceBundle/Resources/views', 'StfalconTinymce');
        $instance->addPath('/var/www/mynet/vendor/knplabs/knp-paginator-bundle/Knp/Bundle/PaginatorBundle/Resources/views', 'KnpPaginator');
        $instance->addPath('/var/www/mynet/vendor/trsteel/ckeditor-bundle/Trsteel/CkeditorBundle/Resources/views', 'TrsteelCkeditor');
        $instance->addPath('/var/www/mynet/vendor/genemu/form-bundle/Genemu/Bundle/FormBundle/Resources/views', 'GenemuForm');
        $instance->addPath('/var/www/mynet/vendor/friendsofsymfony/facebook-bundle/FOS/FacebookBundle/Resources/views', 'FOSFacebook');
        $instance->addPath('/var/www/mynet/vendor/rodchyn/cron-manager-bundle/BCC/CronManagerBundle/Resources/views', 'BCCCronManager');
        $instance->addPath('/var/www/mynet/src/MY/MainBundle/Resources/views', 'MYMain');
        $instance->addPath('/var/www/mynet/src/MY/UserBundle/Resources/views', 'MYUser');
        $instance->addPath('/var/www/mynet/src/MY/MediaBundle/Resources/views', 'MYMedia');
        $instance->addPath('/var/www/mynet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views', 'WebProfiler');
        $instance->addPath('/var/www/mynet/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views', 'SensioDistribution');
        $instance->addPath('/var/www/mynet/app/Resources/views');
        $instance->addPath('/var/www/mynet/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form');
        $instance->addPath('/var/www/mynet/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views');

        return $instance;
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance.
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance.
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Validator\Validator A Symfony\Component\Validator\Validator instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), $this->get('validator.validator_factory'), $this->get('translator.default'), 'validators', array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.user_manager'))));
    }

    /**
     * Gets the 'watermark' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return MY\MediaBundle\Tool\Watermark A MY\MediaBundle\Tool\Watermark instance.
     */
    protected function getWatermarkService()
    {
        $this->services['watermark'] = $instance = new \MY\MediaBundle\Tool\Watermark();

        $instance->setWatermarkBig('/var/www/mynet/app/../src/MY/MainBundle/Resources/public/images/watermark.png');
        $instance->setWatermarkSmall('/var/www/mynet/app/../src/MY/MainBundle/Resources/public/images/watermark_small.png');

        return $instance;
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance.
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig'), 'data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => 'SecurityBundle:Collector:security'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'sonata.block.data_collector' => array(0 => 'block', 1 => 'SonataBlockBundle:Profiler:block.html.twig')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance.
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance.
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom');
    }

    /**
     * Updates the 'request' service.
     */
    protected function synchronizeRequestService()
    {
        if ($this->initialized('locale_listener')) {
            $this->get('locale_listener')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('fragment.handler')) {
            $this->get('fragment.handler')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('router_listener')) {
            $this->get('router_listener')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), '/var/www/mynet/app/../web', true);
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance.
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'fos_user.entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getFosUser_EntityManagerService()
    {
        return $this->services['fos_user.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }

    /**
     * Gets the 'jms_di_extra.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\DiExtraBundle\HttpKernel\ControllerResolver A JMS\DiExtraBundle\HttpKernel\ControllerResolver instance.
     */
    protected function getJmsDiExtra_ControllerResolverService()
    {
        return $this->services['jms_di_extra.controller_resolver'] = new \JMS\DiExtraBundle\HttpKernel\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'my_user.my_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return MY\UserBundle\Security\User\Provider\MyProvider A MY\UserBundle\Security\User\Provider\MyProvider instance.
     */
    protected function getMyUser_MyProviderService()
    {
        return $this->services['my_user.my_provider'] = new \MY\UserBundle\Security\User\Provider\MyProvider($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.access_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\Firewall\AccessListener A Symfony\Component\Security\Http\Firewall\AccessListener instance.
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.context'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'));
    }

    /**
     * Gets the 'security.access_map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\AccessMap A Symfony\Component\Security\Http\AccessMap instance.
     */
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/secured/.*'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/facebook/'), array(0 => 'ROLE_FACEBOOK'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/logout$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login-check$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_SONATA_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login_check'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/loginFb'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/.*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);

        return $instance;
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance.
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('security.user_checker');
        $b = $this->get('security.encoder_factory');

        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('fos_user.user_manager'), $a, 'admin', $b, true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5294ea04764a9'), 2 => new \FOS\FacebookBundle\Security\Authentication\Provider\FacebookProvider('public', $this->get('fos_facebook.api'), $this->get('my.facebook.user'), $a, false), 3 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('my_user.my_provider'), $a, 'public', $b, true), 4 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5294ea04764a9')), true);

        $instance->setEventDispatcher($this->get('event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.session_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy A Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy instance.
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the 'security.channel_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\Firewall\ChannelListener A Symfony\Component\Security\Http\Firewall\ChannelListener instance.
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.expressions.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler A JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler instance.
     */
    protected function getSecurity_Expressions_HandlerService()
    {
        return $this->services['security.expressions.handler'] = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler($this);
    }

    /**
     * Gets the 'security.extra.metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Metadata\MetadataFactory A Metadata\MetadataFactory instance.
     */
    protected function getSecurity_Extra_MetadataFactoryService()
    {
        $this->services['security.extra.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'security.extra.metadata_driver'), new \Metadata\Cache\FileCache('/var/www/mynet/app/cache/de_/jms_security', true));

        $instance->setIncludeInterfaces(true);

        return $instance;
    }

    /**
     * Gets the 'security.http_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\HttpUtils A Symfony\Component\Security\Http\HttpUtils instance.
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }

    /**
     * Gets the 'security.logout.handler.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\Logout\SessionLogoutHandler A Symfony\Component\Security\Http\Logout\SessionLogoutHandler instance.
     */
    protected function getSecurity_Logout_Handler_SessionService()
    {
        return $this->services['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler();
    }

    /**
     * Gets the 'security.user.provider.concrete.chain_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\User\ChainUserProvider A Symfony\Component\Security\Core\User\ChainUserProvider instance.
     */
    protected function getSecurity_User_Provider_Concrete_ChainProviderService()
    {
        return $this->services['security.user.provider.concrete.chain_provider'] = new \Symfony\Component\Security\Core\User\ChainUserProvider(array(0 => $this->get('fos_user.user_manager'), 1 => $this->get('my.facebook.user')));
    }

    /**
     * Gets the 'security.user_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance.
     */
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the 'sonata.block.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Sonata\BlockBundle\Block\BlockServiceManager A Sonata\BlockBundle\Block\BlockServiceManager instance.
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, true, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty');
        $instance->add('sonata.block.service.text', 'sonata.block.service.text');
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss');
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu');
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list');
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result');
        $instance->add('sonata.media.block.media', 'sonata.media.block.media');
        $instance->add('sonata.media.block.feature_media', 'sonata.media.block.feature_media');
        $instance->add('sonata.media.block.gallery', 'sonata.media.block.gallery');
        $instance->add('sonata.user.block.menu', 'sonata.user.block.menu');
        $instance->add('sonata.user.block.account', 'sonata.user.block.account');

        return $instance;
    }

    /**
     * Gets the 'sonata.block.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Sonata\BlockBundle\Templating\Helper\BlockHelper A Sonata\BlockBundle\Templating\Helper\BlockHelper instance.
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper($this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop', 'sonata.block.service.text' => 'sonata.cache.noop', 'sonata.block.service.action' => 'sonata.cache.noop', 'sonata.block.service.rss' => 'sonata.cache.noop')), $this->get('sonata.block.renderer.default'), $this->get('sonata.block.context_manager.default'), $this->get('sonata.cache.manager', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('sonata.block.cache.handler.default', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'stof_doctrine_extensions.listener.translatable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Gedmo\Translatable\TranslatableListener A Gedmo\Translatable\TranslatableListener instance.
     */
    protected function getStofDoctrineExtensions_Listener_TranslatableService()
    {
        $this->services['stof_doctrine_extensions.listener.translatable'] = $instance = new \Gedmo\Translatable\TranslatableListener();

        $instance->setAnnotationReader($this->get('annotation_reader'));
        $instance->setDefaultLocale('am_ARM');
        $instance->setTranslatableLocale('am_ARM');
        $instance->setTranslationFallback(true);
        $instance->setPersistDefaultLocaleTranslation(false);
        $instance->setSkipOnLoad(false);

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), '/var/www/mynet/app/cache/de_');
    }

    /**
     * Gets the 'twig.form.renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bridge\Twig\Form\TwigRenderer A Symfony\Bridge\Twig\Form\TwigRenderer instance.
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'A2lixTranslationFormBundle::form.html.twig', 2 => 'SonataUserBundle:Form:form_admin_fields.html.twig', 3 => 'TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig', 4 => 'A2lixTranslationFormBundle::default.html.twig', 5 => 'GenemuFormBundle:Form:div_layout.html.twig', 6 => 'GenemuFormBundle:Form:jquery_layout.html.twig', 7 => 'GenemuFormBundle:Form:stylesheet_layout.html.twig')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'validator.mapping.class_metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Validator\Mapping\ClassMetadataFactory A Symfony\Component\Validator\Mapping\ClassMetadataFactory instance.
     */
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml', 1 => '/var/www/mynet/vendor/sonata-project/media-bundle/Sonata/MediaBundle/Resources/config/validation.xml', 2 => '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml', 3 => '/var/www/mynet/vendor/rodchyn/cron-manager-bundle/BCC/CronManagerBundle/Resources/config/validation.xml', 4 => '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation/orm.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }

    /**
     * Gets the 'validator.validator_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory A Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory instance.
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->services['validator.validator_factory'] = new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'sonata.admin.validator.inline' => 'sonata.admin.validator.inline', 'sonata.media.validator.format' => 'sonata.media.validator.format'));
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritDoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/var/www/mynet/app',
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'ap_',
            'kernel.cache_dir' => '/var/www/mynet/app/cache/de_',
            'kernel.logs_dir' => '/var/www/mynet/app/logs',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle',
                'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle',
                'JMSSecurityExtraBundle' => 'JMS\\SecurityExtraBundle\\JMSSecurityExtraBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'SonataCacheBundle' => 'Sonata\\CacheBundle\\SonataCacheBundle',
                'SonatajQueryBundle' => 'Sonata\\jQueryBundle\\SonatajQueryBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'SonataMediaBundle' => 'Sonata\\MediaBundle\\SonataMediaBundle',
                'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle',
                'StfalconTinymceBundle' => 'Stfalcon\\Bundle\\TinymceBundle\\StfalconTinymceBundle',
                'PrestaSitemapBundle' => 'Presta\\SitemapBundle\\PrestaSitemapBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'TrsteelCkeditorBundle' => 'Trsteel\\CkeditorBundle\\TrsteelCkeditorBundle',
                'GenemuFormBundle' => 'Genemu\\Bundle\\FormBundle\\GenemuFormBundle',
                'FOSFacebookBundle' => 'FOS\\FacebookBundle\\FOSFacebookBundle',
                'BCCCronManagerBundle' => 'BCC\\CronManagerBundle\\BCCCronManagerBundle',
                'MYMainBundle' => 'MY\\MainBundle\\MYMainBundle',
                'MYUserBundle' => 'MY\\UserBundle\\MYUserBundle',
                'MYMediaBundle' => 'MY\\MediaBundle\\MYMediaBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'ap_DevDebugProjectContainer',
            'database_driver' => 'pdo_mysql',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'my',
            'database_user' => 'root',
            'database_password' => 'root',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'locale' => 'en',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'fos_facebook_app_url' => 'sovorel.am',
            'fos_facebook_server_url' => 'sovorel.am',
            'fos_facebook_app_id' => 'sovorel.am',
            'fos_facebook_secret' => 'sovorel.am',
            'facebook_client_id' => 'sovorel.am',
            'facebook_client_secret' => 'sovorel.am',
            'items_per_page' => 10,
            'languages' => array(
                'en' => 'EN',
            ),
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'debug.errors_logger_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener',
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.container.dump' => '/var/www/mynet/app/cache/de_/ap_DevDebugProjectContainer.xml',
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(

            ),
            'session.save_path' => '/var/www/mynet/app/cache/de_/sessions',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'form.csrf_provider.class' => 'Symfony\\Component\\Form\\Extension\\Csrf\\CsrfProvider\\SessionCsrfProvider',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.debugger.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Debugger',
            'debug.templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => '/var/www/mynet/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml',
                1 => '/var/www/mynet/vendor/sonata-project/media-bundle/Sonata/MediaBundle/Resources/config/validation.xml',
                2 => '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml',
                3 => '/var/www/mynet/vendor/rodchyn/cron-manager-bundle/BCC/CronManagerBundle/Resources/config/validation.xml',
                4 => '/var/www/mynet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation/orm.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(

            ),
            'validator.translation_domain' => 'validators',
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => 'file:/var/www/mynet/app/cache/de_/profiler',
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'ap_DevUrlMatcher',
            'router.options.generator.cache_class' => 'ap_DevUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => '/var/www/mynet/app/config/routing_dev.yml',
            'router.cache_class_prefix' => 'ap_Dev',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'fos_facebook.options.public' => array(
                'provider' => 'my_fos_facebook_provider',
                'check_path' => '/loginFb',
                'app_url' => 'sovorel.am',
                'server_url' => 'sovorel.am',
                'default_target_path' => '/',
                'login_path' => '/login',
                'remember_me' => true,
                'use_forward' => false,
                'require_previous_session' => true,
                'display' => 'page',
                'create_user_if_not_exists' => false,
                'redirect_to_facebook_login' => true,
                'always_use_default_target_path' => false,
                'target_path_parameter' => '_target_path',
                'use_referer' => false,
                'failure_path' => NULL,
                'failure_forward' => false,
                'failure_path_parameter' => '_failure_path',
            ),
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_SONATA_ADMIN',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'A2lixTranslationFormBundle::form.html.twig',
                2 => 'SonataUserBundle:Form:form_admin_fields.html.twig',
                3 => 'TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig',
                4 => 'A2lixTranslationFormBundle::default.html.twig',
                5 => 'GenemuFormBundle:Form:div_layout.html.twig',
                6 => 'GenemuFormBundle:Form:jquery_layout.html.twig',
                7 => 'GenemuFormBundle:Form:stylesheet_layout.html.twig',
            ),
            'debug.templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\Debug\\TimedTwigEngine',
            'twig.options' => array(
                'debug' => true,
                'strict_variables' => true,
                'exception_controller' => 'twig.controller.exception:showAction',
                'autoescape_service' => NULL,
                'autoescape_service_method' => NULL,
                'cache' => '/var/www/mynet/app/cache/de_/twig',
                'charset' => 'UTF-8',
                'paths' => array(

                ),
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handlers_to_channels' => array(
                'monolog.handler.firephp' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => '/var/www/mynet/app/cache/de_/swiftmailer/spool/default',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => '/var/www/mynet/app/cache/de_/assetic',
            'assetic.bundles' => array(
                0 => 'MYMainBundle',
                1 => 'MYUserBundle',
                2 => 'FOSUserBundle',
                3 => 'TwigBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => '/var/www/mynet/app/../web',
            'assetic.write_to' => '/var/www/mynet/app/../web',
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.filter.yui_css.class' => 'Assetic\\Filter\\Yui\\CssCompressorFilter',
            'assetic.filter.yui_css.java' => '/usr/bin/java',
            'assetic.filter.yui_css.jar' => '/var/www/mynet/app/Resources/java/yuicompressor-2.4.7.jar',
            'assetic.filter.yui_css.charset' => 'UTF-8',
            'assetic.filter.yui_css.stacksize' => NULL,
            'assetic.filter.yui_css.timeout' => NULL,
            'assetic.filter.yui_js.class' => 'Assetic\\Filter\\Yui\\JsCompressorFilter',
            'assetic.filter.yui_js.java' => '/usr/bin/java',
            'assetic.filter.yui_js.jar' => '/var/www/mynet/app/Resources/java/yuicompressor-2.4.7.jar',
            'assetic.filter.yui_js.charset' => 'UTF-8',
            'assetic.filter.yui_js.stacksize' => NULL,
            'assetic.filter.yui_js.timeout' => NULL,
            'assetic.filter.yui_js.nomunge' => NULL,
            'assetic.filter.yui_js.preserve_semi' => NULL,
            'assetic.filter.yui_js.disable_optimizations' => NULL,
            'assetic.twig_extension.functions' => array(

            ),
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
                'json' => array(
                    'class' => 'Sonata\\Doctrine\\Types\\JsonType',
                    'commented' => true,
                ),
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => '/var/www/mynet/app/cache/de_/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'jms_aop.cache_dir' => '/var/www/mynet/app/cache/de_/jms_aop',
            'jms_aop.interceptor_loader.class' => 'JMS\\AopBundle\\Aop\\InterceptorLoader',
            'jms_di_extra.metadata.driver.annotation_driver.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'jms_di_extra.metadata.driver.configured_controller_injections.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\ConfiguredControllerInjectionsDriver',
            'jms_di_extra.metadata.driver.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_di_extra.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_di_extra.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_di_extra.metadata.converter.class' => 'JMS\\DiExtraBundle\\Metadata\\MetadataConverter',
            'jms_di_extra.controller_resolver.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerResolver',
            'jms_di_extra.controller_injectors_warmer.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerInjectorsWarmer',
            'jms_di_extra.all_bundles' => false,
            'jms_di_extra.bundles' => array(

            ),
            'jms_di_extra.directories' => array(

            ),
            'jms_di_extra.cache_dir' => '/var/www/mynet/app/cache/de_/jms_diextra',
            'jms_di_extra.disable_grep' => false,
            'jms_di_extra.doctrine_integration' => true,
            'jms_di_extra.cache_warmer.controller_file_blacklist' => array(

            ),
            'jms_di_extra.doctrine_integration.entity_manager.file' => '/var/www/mynet/app/cache/de_/jms_diextra/doctrine/EntityManager_5294ea04cc28b.php',
            'jms_di_extra.doctrine_integration.entity_manager.class' => 'EntityManager5294ea04cc28b_546a8d27f194334ee012bfe64f629947b07e4919\\__CG__\\Doctrine\\ORM\\EntityManager',
            'security.secured_services' => array(

            ),
            'security.access.method_interceptor.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Interception\\MethodSecurityInterceptor',
            'security.access.method_access_control' => array(

            ),
            'security.access.remembering_access_decision_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RememberingAccessDecisionManager',
            'security.access.run_as_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RunAsManager',
            'security.authentication.provider.run_as.class' => 'JMS\\SecurityExtraBundle\\Security\\Authentication\\Provider\\RunAsAuthenticationProvider',
            'security.run_as.key' => 'RunAsToken',
            'security.run_as.role_prefix' => 'ROLE_',
            'security.access.after_invocation_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AfterInvocationManager',
            'security.access.after_invocation.acl_provider.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AclAfterInvocationProvider',
            'security.access.iddqd_voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Voter\\IddqdVoter',
            'security.extra.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'security.extra.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'security.extra.driver_chain.class' => 'Metadata\\Driver\\DriverChain',
            'security.extra.annotation_driver.class' => 'JMS\\SecurityExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'security.extra.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'security.access.secure_all_services' => false,
            'security.extra.cache_dir' => '/var/www/mynet/app/cache/de_/jms_security',
            'security.acl.permission_evaluator.class' => 'JMS\\SecurityExtraBundle\\Security\\Acl\\Expression\\PermissionEvaluator',
            'security.acl.has_permission_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Acl\\Expression\\HasPermissionFunctionCompiler',
            'security.expressions.voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\LazyLoadingExpressionVoter',
            'security.expressions.handler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ContainerAwareExpressionHandler',
            'security.expressions.compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ExpressionCompiler',
            'security.expressions.expression.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Expression',
            'security.expressions.variable_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Compiler\\ContainerAwareVariableCompiler',
            'security.expressions.parameter_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Compiler\\ParameterExpressionCompiler',
            'security.expressions.reverse_interpreter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ReverseInterpreter',
            'security.extra.config_driver.class' => 'JMS\\SecurityExtraBundle\\Metadata\\Driver\\ConfigDriver',
            'security.extra.twig_extension.class' => 'JMS\\SecurityExtraBundle\\Twig\\SecurityExtension',
            'security.authenticated_voter.disabled' => false,
            'security.role_voter.disabled' => false,
            'security.acl_voter.disabled' => false,
            'security.extra.iddqd_ignore_roles' => array(
                0 => 'ROLE_PREVIOUS_ADMIN',
            ),
            'security.iddqd_aliases' => array(

            ),
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata_block.blocks' => array(
                'sonata.admin.block.admin_list' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.block.service.text' => array(
                    'contexts' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.block.service.action' => array(
                    'contexts' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.block.service.rss' => array(
                    'contexts' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
            ),
            'sonata_block.blocks_by_class' => array(

            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                    'sonata.block.service.text' => 'sonata.cache.noop',
                    'sonata.block.service.action' => 'sonata.cache.noop',
                    'sonata.block.service.rss' => 'sonata.cache.noop',
                ),
            ),
            'sonata.admin.configuration.templates' => array(
                'user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig',
                'layout' => 'SonataAdminBundle::standard_layout.html.twig',
                'ajax' => 'SonataAdminBundle::ajax_layout.html.twig',
                'list' => 'SonataAdminBundle:CRUD:list.html.twig',
                'show' => 'SonataAdminBundle:CRUD:show.html.twig',
                'edit' => 'SonataAdminBundle:CRUD:edit.html.twig',
                'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig',
                'search' => 'SonataAdminBundle:Core:search.html.twig',
                'preview' => 'SonataAdminBundle:CRUD:preview.html.twig',
                'history' => 'SonataAdminBundle:CRUD:history.html.twig',
                'acl' => 'SonataAdminBundle:CRUD:acl.html.twig',
                'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig',
                'action' => 'SonataAdminBundle:CRUD:action.html.twig',
                'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig',
                'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig',
                'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig',
                'delete' => 'SonataAdminBundle:CRUD:delete.html.twig',
                'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig',
                'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig',
                'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig',
                'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                'pager_links' => 'SonataAdminBundle:Pager:links.html.twig',
                'pager_results' => 'SonataAdminBundle:Pager:results.html.twig',
            ),
            'sonata.admin.configuration.admin_services' => array(

            ),
            'sonata.admin.configuration.dashboard_groups' => array(

            ),
            'sonata.admin.configuration.dashboard_blocks' => array(
                0 => array(
                    'type' => 'sonata.admin.block.admin_list',
                    'position' => 'left',
                    'settings' => array(

                    ),
                ),
            ),
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.information' => array(
                'EDIT' => array(
                    0 => 'EDIT',
                ),
                'LIST' => array(
                    0 => 'LIST',
                ),
                'CREATE' => array(
                    0 => 'CREATE',
                ),
                'VIEW' => array(
                    0 => 'VIEW',
                ),
                'DELETE' => array(
                    0 => 'DELETE',
                ),
                'OPERATOR' => array(
                    0 => 'OPERATOR',
                ),
                'MASTER' => array(
                    0 => 'MASTER',
                ),
            ),
            'sonata.admin.configuration.security.admin_permissions' => array(
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ),
            'sonata.admin.configuration.security.object_permissions' => array(
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ),
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => array(
                'admins' => array(

                ),
                'excludes' => array(

                ),
                'implements' => array(

                ),
                'extends' => array(

                ),
                'instanceof' => array(

                ),
            ),
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => array(
                'types' => array(
                    'list' => array(
                        'array' => 'SonataAdminBundle:CRUD:list_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:list_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:list_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:list_url.html.twig',
                    ),
                    'show' => array(
                        'array' => 'SonataAdminBundle:CRUD:show_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:show_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:show_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:base_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:base_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:show_url.html.twig',
                    ),
                ),
                'form' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig',
                ),
                'filter' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig',
                ),
            ),
            'sonata.media.provider.image.class' => 'Sonata\\MediaBundle\\Provider\\ImageProvider',
            'sonata.media.provider.file.class' => 'Sonata\\MediaBundle\\Provider\\FileProvider',
            'sonata.media.provider.youtube.class' => 'Sonata\\MediaBundle\\Provider\\YouTubeProvider',
            'sonata.media.provider.dailymotion.class' => 'Sonata\\MediaBundle\\Provider\\DailyMotionProvider',
            'sonata.media.provider.vimeo.class' => 'Sonata\\MediaBundle\\Provider\\VimeoProvider',
            'sonata.media.thumbnail.format' => 'Sonata\\MediaBundle\\Thumbnail\\FormatThumbnail',
            'sonata.media.thumbnail.format.default' => 'jpg',
            'sonata.media.thumbnail.liip_imagine' => 'Sonata\\MediaBundle\\Thumbnail\\LiipImagineThumbnail',
            'sonata.media.pool.class' => 'Sonata\\MediaBundle\\Provider\\Pool',
            'sonata.media.resizer.simple.class' => 'Sonata\\MediaBundle\\Resizer\\SimpleResizer',
            'sonata.media.resizer.square.class' => 'Sonata\\MediaBundle\\Resizer\\SquareResizer',
            'sonata.media.block.media.class' => 'Sonata\\MediaBundle\\Block\\MediaBlockService',
            'sonata.media.block.feature_media.class' => 'Sonata\\MediaBundle\\Block\\FeatureMediaBlockService',
            'sonata.media.block.gallery.class' => 'Sonata\\MediaBundle\\Block\\GalleryBlockService',
            'sonata.media.metadata.proxy.class' => 'Sonata\\MediaBundle\\Metadata\\ProxyMetadataBuilder',
            'sonata.media.metadata.amazon.class' => 'Sonata\\MediaBundle\\Metadata\\AmazonMetadataBuilder',
            'sonata.media.metadata.noop.class' => 'Sonata\\MediaBundle\\Metadata\\NoopMetadataBuilder',
            'sonata.media.adapater.filesystem.opencloud.class' => '',
            'sonata.media.manager.media.class' => 'Sonata\\MediaBundle\\Entity\\MediaManager',
            'sonata.media.manager.gallery.class' => 'Sonata\\MediaBundle\\Entity\\GalleryManager',
            'sonata.media.admin.media.class' => 'MY\\MediaBundle\\Admin\\ORM\\MediaAdmin',
            'sonata.media.admin.media.controller' => 'MYMediaBundle:MediaAdmin',
            'sonata.media.admin.media.translation_domain' => 'SonataMediaBundle',
            'sonata.media.admin.gallery.class' => 'Sonata\\MediaBundle\\Admin\\GalleryAdmin',
            'sonata.media.admin.gallery.controller' => 'SonataMediaBundle:GalleryAdmin',
            'sonata.media.admin.gallery.translation_domain' => 'SonataMediaBundle',
            'sonata.media.admin.gallery_has_media.class' => 'Sonata\\MediaBundle\\Admin\\GalleryHasMediaAdmin',
            'sonata.media.admin.gallery_has_media.controller' => 'SonataAdminBundle:CRUD',
            'sonata.media.admin.gallery_has_media.translation_domain' => 'SonataMediaBundle',
            'sonata.media.resizer.simple.adapter.mode' => 'inset',
            'sonata.media.resizer.square.adapter.mode' => 'inset',
            'sonata.media.admin.media.entity' => 'MY\\MediaBundle\\Entity\\Media',
            'sonata.media.admin.gallery.entity' => 'MY\\MediaBundle\\Entity\\Gallery',
            'sonata.media.admin.gallery_has_media.entity' => 'MY\\MediaBundle\\Entity\\GalleryHasMedia',
            'sonata.media.media.class' => 'MY\\MediaBundle\\Entity\\Media',
            'sonata.media.gallery.class' => 'MY\\MediaBundle\\Entity\\Gallery',
            'sonata.user.admin.groupname' => 'sonata_user',
            'sonata.user.admin.user.class' => 'Sonata\\UserBundle\\Admin\\Entity\\UserAdmin',
            'sonata.user.admin.group.class' => 'Sonata\\UserBundle\\Admin\\Entity\\GroupAdmin',
            'sonata.user.admin.user.entity' => 'MY\\UserBundle\\Entity\\User',
            'sonata.user.admin.group.entity' => 'MY\\UserBundle\\Entity\\Group',
            'sonata.user.admin.user.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.group.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.user.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.admin.group.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.impersonating' => array(
                'route' => 'sonata_admin_dashboard',
                'parameters' => array(

                ),
            ),
            'sonata.user.google.authenticator.enabled' => false,
            'sonata.user.profile.form.type' => 'sonata_user_profile',
            'sonata.user.profile.form.name' => 'sonata_user_profile_form',
            'sonata.user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'sonata.user.register.confirm.redirect_route' => 'sonata_user_profile_show',
            'sonata.user.register.confirm.redirect_route_params' => array(

            ),
            'sonata.user.configuration.profile_blocks' => array(
                0 => array(
                    'position' => 'left',
                    'settings' => array(
                        'content' => '<h2>Welcome!</h2> This is a sample user profile dashboard, feel free to override it in the configuration!',
                    ),
                    'type' => 'sonata.block.service.text',
                ),
            ),
            'knp_menu.factory.class' => 'Knp\\Menu\\Silex\\RouterAwareFactory',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'fos_user.validator.password.class' => 'FOS\\UserBundle\\Validator\\PasswordValidator',
            'fos_user.validator.unique.class' => 'FOS\\UserBundle\\Validator\\UniqueValidator',
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\Security\\InteractiveLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'FOSUserBundle:Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'public',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'MY\\UserBundle\\Entity\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.profile.form.type' => 'fos_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'my_user_registration',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
            ),
            'fos_user.resetting.email.from_email' => array(
                '...' => '...',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
            ),
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'MY\\UserBundle\\Entity\\Group',
            'fos_user.group.form.type' => 'fos_user_group',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'am_ARM',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => true,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'a2lix_translation_form.locales' => array(
                0 => 'en',
            ),
            'a2lix_translation_form.default_required' => false,
            'a2lix_translation_form.default.service.translation.class' => 'A2lix\\TranslationFormBundle\\TranslationForm\\TranslationForm',
            'a2lix_translation_form.default.listener.translations.class' => 'A2lix\\TranslationFormBundle\\Form\\EventListener\\TranslationsListener',
            'a2lix_translation_form.default.listener.translationsforms.class' => 'A2lix\\TranslationFormBundle\\Form\\EventListener\\TranslationsFormsListener',
            'a2lix_translation_form.default.type.translations.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsType',
            'a2lix_translation_form.default.type.translationsfields.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFieldsType',
            'a2lix_translation_form.default.type.translationsforms.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFormsType',
            'a2lix_translation_form.default.type.translationslocalesselector.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsLocalesSelectorType',
            'a2lix_translation_form.default_locale' => 'en',
            'a2lix_translation_form.templating' => 'A2lixTranslationFormBundle::default.html.twig',
            'stfalcon_tinymce.config' => array(
                'language' => 'en',
                'include_jquery' => false,
                'tinymce_jquery' => false,
                'use_callback_tinymce_init' => false,
                'selector' => '.tinymce',
                'theme' => array(
                    'advanced' => array(
                        'theme' => 'modern',
                        'plugins' => array(
                            0 => 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                            1 => 'searchreplace wordcount visualblocks visualchars code fullscreen',
                            2 => 'insertdatetime media nonbreaking save table contextmenu directionality',
                            3 => 'emoticons template paste textcolor',
                        ),
                        'toolbar1' => 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify
                                   | bullist numlist outdent indent | link image',
                        'toolbar2' => 'print preview media | forecolor backcolor emoticons',
                        'image_advtab' => true,
                    ),
                    'simple' => array(

                    ),
                ),
                'tinymce_buttons' => array(

                ),
                'external_plugins' => array(

                ),
            ),
            'stfalcon_tinymce.twig.extension.class' => 'Stfalcon\\Bundle\\TinymceBundle\\Twig\\Extension\\StfalconTinymceExtension',
            'presta_sitemap.generator.class' => 'Presta\\SitemapBundle\\Service\\Generator',
            'presta_sitemap.dumper.class' => 'Presta\\SitemapBundle\\Service\\Dumper',
            'presta_sitemap.timetolive' => '3600',
            'presta_sitemap.dumper_base_url' => 'http://localhost/',
            'presta_sitemap.eventlistener.route_annotation.class' => 'Presta\\SitemapBundle\\EventListener\\RouteAnnotationEventListener',
            'doctrine_migrations.dir_name' => '/var/www/mynet/app/DoctrineMigrations',
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'knp_paginator.class' => 'Knp\\Component\\Pager\\Paginator',
            'knp_paginator.templating.helper.pagination.class' => 'Knp\\Bundle\\PaginatorBundle\\Templating\\PaginationHelper',
            'knp_paginator.helper.processor.class' => 'Knp\\Bundle\\PaginatorBundle\\Helper\\Processor',
            'knp_paginator.template.pagination' => 'KnpPaginatorBundle:Pagination:sliding.html.twig',
            'knp_paginator.template.filtration' => 'KnpPaginatorBundle:Pagination:filtration.html.twig',
            'knp_paginator.template.sortable' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'trsteel_ckeditor.form.type.class' => 'Trsteel\\CkeditorBundle\\Form\\Type\\CkeditorType',
            'trsteel_ckeditor.ckeditor.transformers' => array(
                0 => 'strip_js',
                1 => 'strip_css',
                2 => 'strip_comments',
            ),
            'trsteel_ckeditor.ckeditor.toolbar' => array(
                0 => 'document',
                1 => 'clipboard',
                2 => 'editing',
                3 => '/',
                4 => 'basicstyles',
                5 => 'paragraph',
                6 => 'links',
                7 => '/',
                8 => 'insert',
                9 => 'styles',
                10 => 'tools',
            ),
            'trsteel_ckeditor.ckeditor.toolbar_groups' => array(
                'document' => array(
                    0 => 'Source',
                ),
                'clipboard' => array(
                    0 => 'Cut',
                    1 => 'Copy',
                    2 => 'Paste',
                    3 => 'PasteText',
                    4 => 'PasteFromWord',
                    5 => '-',
                    6 => 'Undo',
                    7 => 'Redo',
                ),
                'editing' => array(
                    0 => 'Find',
                    1 => 'Replace',
                    2 => '-',
                    3 => 'SelectAll',
                ),
                'basicstyles' => array(
                    0 => 'Bold',
                    1 => 'Italic',
                    2 => 'Underline',
                    3 => 'Strike',
                    4 => 'Subscript',
                    5 => 'Superscript',
                    6 => '-',
                    7 => 'RemoveFormat',
                ),
                'paragraph' => array(
                    0 => 'NumberedList',
                    1 => 'BulletedList',
                    2 => '-',
                    3 => 'Outdent',
                    4 => 'Indent',
                    5 => '-',
                    6 => 'JustifyLeft',
                    7 => 'JustifyCenter',
                    8 => 'JustifyRight',
                    9 => 'JustifyBlock',
                ),
                'links' => array(
                    0 => 'Link',
                    1 => 'Unlink',
                    2 => 'Anchor',
                ),
                'insert' => array(
                    0 => 'Image',
                    1 => 'Flash',
                    2 => 'Table',
                    3 => 'HorizontalRule',
                ),
                'styles' => array(
                    0 => 'Styles',
                    1 => 'Format',
                ),
                'tools' => array(
                    0 => 'Maximize',
                    1 => 'ShowBlocks',
                ),
            ),
            'trsteel_ckeditor.ckeditor.startup_outline_blocks' => true,
            'trsteel_ckeditor.ckeditor.ui_color' => NULL,
            'trsteel_ckeditor.ckeditor.width' => NULL,
            'trsteel_ckeditor.ckeditor.height' => NULL,
            'trsteel_ckeditor.ckeditor.language' => NULL,
            'trsteel_ckeditor.ckeditor.filebrowser_browse_url' => array(
                'url' => NULL,
                'route' => NULL,
                'route_parameters' => array(

                ),
            ),
            'trsteel_ckeditor.ckeditor.filebrowser_upload_url' => array(
                'url' => '/upload/',
                'route' => NULL,
                'route_parameters' => array(

                ),
            ),
            'trsteel_ckeditor.ckeditor.filebrowser_image_browse_url' => array(
                'url' => NULL,
                'route' => NULL,
                'route_parameters' => array(

                ),
            ),
            'trsteel_ckeditor.ckeditor.filebrowser_image_upload_url' => array(
                'url' => NULL,
                'route' => NULL,
                'route_parameters' => array(

                ),
            ),
            'trsteel_ckeditor.ckeditor.filebrowser_flash_browse_url' => array(
                'url' => NULL,
                'route' => NULL,
                'route_parameters' => array(

                ),
            ),
            'trsteel_ckeditor.ckeditor.filebrowser_flash_upload_url' => array(
                'url' => NULL,
                'route' => NULL,
                'route_parameters' => array(

                ),
            ),
            'trsteel_ckeditor.ckeditor.skin' => NULL,
            'trsteel_ckeditor.ckeditor.format_tags' => array(

            ),
            'trsteel_ckeditor.ckeditor.base_path' => 'bundles/trsteelckeditor/',
            'trsteel_ckeditor.ckeditor.base_href' => NULL,
            'trsteel_ckeditor.ckeditor.body_class' => NULL,
            'trsteel_ckeditor.ckeditor.contents_css' => NULL,
            'trsteel_ckeditor.ckeditor.basic_entities' => NULL,
            'trsteel_ckeditor.ckeditor.entities' => NULL,
            'trsteel_ckeditor.ckeditor.entities_latin' => NULL,
            'trsteel_ckeditor.ckeditor.startup_mode' => NULL,
            'trsteel_ckeditor.ckeditor.external_plugins' => array(

            ),
            'genemu.form.recaptcha.public_key' => '6LeYWMcSAAAAAFGeUexBltVF25GV_5YT1vduVvS1',
            'genemu.form.recaptcha.private_key' => '6LeYWMcSAAAAAPOC3fEIg5UwtHGZzO1HB1NZYx9F',
            'genemu.form.recaptcha.server_url' => 'http://api.recaptcha.net',
            'genemu.form.recaptcha.code' => NULL,
            'genemu.form.recaptcha.options' => array(

            ),
            'genemu.form.recaptcha.validation.options' => array(
                'code' => NULL,
                'host' => 'api-verify.recaptcha.net',
                'port' => 80,
                'path' => '/verify',
                'timeout' => 10,
            ),
            'genemu.form.captcha.options' => array(
                'enabled' => true,
                'driver' => 'gd',
                'width' => 100,
                'height' => 30,
                'length' => 4,
                'format' => 'png',
                'chars' => array(
                    0 => 0,
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 4,
                    5 => 5,
                    6 => 6,
                    7 => 7,
                    8 => 8,
                    9 => 9,
                ),
                'font_size' => 18,
                'grayscale' => false,
                'font_color' => array(
                    0 => '252525',
                    1 => '8B8787',
                    2 => '550707',
                    3 => '3526E6',
                    4 => '88531E',
                ),
                'fonts' => array(
                    0 => '/var/www/mynet/app/../web/bundles/genemuform/fonts/akbar.ttf',
                    1 => '/var/www/mynet/app/../web/bundles/genemuform/fonts/brushcut.ttf',
                    2 => '/var/www/mynet/app/../web/bundles/genemuform/fonts/molten.ttf',
                    3 => '/var/www/mynet/app/../web/bundles/genemuform/fonts/planetbe.ttf',
                    4 => '/var/www/mynet/app/../web/bundles/genemuform/fonts/whoobub.ttf',
                ),
                'background_color' => 'DDDDDD',
                'border_color' => '000000',
                'code' => NULL,
            ),
            'genemu.form.tinymce.configs' => array(
                'theme' => 'advanced',
            ),
            'genemu.form.color.options' => array(

            ),
            'genemu.form.date.options' => array(

            ),
            'genemu.form.rating.options' => array(

            ),
            'genemu.form.file.root_dir' => '/var/www/mynet/app/../web',
            'genemu.form.file.folder' => '/upload',
            'genemu.form.file.upload_dir' => '/var/www/mynet/app/../web/upload',
            'genemu.form.file.options' => array(

            ),
            'genemu.form.image.selected' => '',
            'genemu.form.image.thumbnails' => array(

            ),
            'genemu.form.image.filters' => array(

            ),
            'fos_facebook.api.class' => 'FOS\\FacebookBundle\\Facebook\\FacebookSessionPersistence',
            'fos_facebook.helper.class' => 'FOS\\FacebookBundle\\Templating\\Helper\\FacebookHelper',
            'fos_facebook.twig.class' => 'FOS\\FacebookBundle\\Twig\\Extension\\FacebookExtension',
            'fos_facebook.app_id' => 'sovorel.am',
            'fos_facebook.secret' => 'sovorel.am',
            'fos_facebook.cookie' => true,
            'fos_facebook.domain' => NULL,
            'fos_facebook.logging' => true,
            'fos_facebook.culture' => 'en_US',
            'fos_facebook.permissions' => array(
                0 => 'email',
                1 => 'user_birthday',
                2 => 'user_location',
            ),
            'my.main.admin.slider' => 'Slider',
            'my.main.admin.interestings' => 'Interestings',
            'my.main.admin.concurs' => 'Concurs',
            'my.main.admin.realty' => 'Realty',
            'my.main.admin.ads' => 'Ads',
            'watermark.class' => 'MY\\MediaBundle\\Tool\\Watermark',
            'watermark.image.big' => '/var/www/mynet/app/../src/MY/MainBundle/Resources/public/images/watermark.png',
            'watermark.image.small' => '/var/www/mynet/app/../src/MY/MainBundle/Resources/public/images/watermark_small.png',
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'web_profiler.debug_toolbar.position' => 'bottom',
            'sensio_distribution.webconfigurator.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Configurator',
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => 'SecurityBundle:Collector:security',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'sonata.block.data_collector' => array(
                    0 => 'block',
                    1 => 'SonataBlockBundle:Profiler:block.html.twig',
                ),
            ),
        );
    }
}