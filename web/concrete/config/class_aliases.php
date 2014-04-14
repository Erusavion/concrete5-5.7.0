<?
defined('C5_EXECUTE') or die("Access Denied.");
$list = \Concrete\Core\Foundation\ClassAliasList::getInstance();

$list->registerMultiple(array(
	'Service' => 'Core\Application\API\Facade\ServiceFacade'
));

$list->registerMultiple(array(
	'Cache' => 'Core\Cache\Cache',
	'CacheLocal' => 'Core\Cache\CacheLocal',
	'Database' => 'Core\Database\Database',
	'CollectionAttributeKey' => 'Core\Attribute\Key\CollectionKey',
	'FileAttributeKey' => 'Core\Attribute\Key\FileKey',
	'UserAttributeKey' => 'Core\Attribute\Key\UserKey',
	'AssetList' => 'Core\Asset\AssetList',
	'Environment' => 'Core\Foundation\Environment',
	'Localization' => 'Core\Localization\Localization',
	'Redirect' => 'Core\Routing\Redirect',
	'Router' => 'Core\Routing\Router',
	'RedirectResponse' => 'Core\Routing\RedirectResponse',
	'Request' => 'Core\Http\Request',
	'Response' => 'Core\Http\Response',
	'Cookie' => 'Core\Cookie\Cookie',
	'Events' => 'Core\Events\Events',
	'Page' => 'Core\Page\Page',
	'PageEditResponse' => 'Core\Page\EditResponse',
	'Controller' => 'Core\Controller\Controller',
	'PageController' => 'Core\Page\Controller\PageController',
	'SinglePage' => 'Core\Page\Single',
	'Config' => 'Core\Config\Config',
	'PageType' => 'Core\Page\Type\Type',
	'PageTemplate' => 'Core\Page\Template',
	'PageTheme' => 'Core\Page\Theme\Theme',
	'PageList' => 'Core\Page\PageList',
	'PageCache' => 'Core\Cache\Page\PageCache',
	'Conversation' => 'Core\Conversation\Conversation',
	'ConversationMessage' => 'Core\Conversation\Message',
	'ConversationFlagType' => 'Core\Conversation\FlagType\FlagType',
	'Queue' => 'Core\Foundation\Queue',
	'Block' => 'Core\Block\Block',
	'Marketplace' => 'Core\Marketplace\Marketplace',
	'BlockType' => 'Core\Block\BlockType\BlockType',
	'BlockTypeList' => 'Core\Block\BlockType\BlockTypeList',
	'BlockTypeSet' => 'Core\Block\BlockType\Set',
	'Conversation' => 'Core\Conversation\Conversation',
	'Package' => 'Core\Package\Package',
	'Collection' => 'Core\Page\Collection\Collection',
	'CollectionVersion' => 'Core\Page\Collection\Version\Version',
	'Area' => 'Core\Area\Area',
	'GlobalArea' => 'Core\Area\GlobalArea',
	'Stack' => 'Core\Page\Stack\Stack',
	'StackList' => 'Core\Page\Stack\StackList',
	'View' => 'Core\View\View',
	'Job' => 'Core\Job\Job',
	'Workflow' => 'Core\Workflow\Workflow',
	'JobSet' => 'Core\Job\Set',
	'URL' => 'Core\Routing\URL',
	'File' => 'Core\File\File',
	'FileVersion' => 'Core\File\Version',
	'FileSet' => 'Core\File\Set\Set',
	'FileImporter' => 'Core\File\Importer',
	'Group' => 'Core\User\Group\Group',
	'GroupSet' => 'Core\User\Group\Set',
	'GroupList' => 'Core\User\Group\GroupList',
	'FileList' => 'Core\File\FileList',
	'QueueableJob' => 'Core\Job\QueueableJob',
	'Permissions' => 'Core\Permission\Checker',
	'PermissionKey' => 'Core\Permission\Key\Key',
	'PermissionKeyCategory' => 'Core\Permission\Category',
	'PermissionAccess' => 'Core\Permission\Access\Access',
	'User' => 'Core\User\User',
	'UserInfo' => 'Core\User\UserInfo',
	'UserList' => 'Core\User\UserList',
	'Log' => 'Core\Logging\Log',
	'StartingPointPackage' => 'Core\Package\StartingPointPackage',
	'AuthenticationType' => 'Core\Authentication\AuthenticationType',
	'ConcreteAuthenticationTypeController' => 'Core\Authentication\Type\Concrete',
	'FacebookAuthenticationTypeController' => 'Core\Authentication\Type\Facebook',
	'GroupTree' => 'Core\Tree\Type\Group',
	'GroupTreeNode' => 'Core\Tree\Node\Type\Group'

));