<?php
// source: phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar/conf/config.neon
// source: phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar/conf/config.level8.neon
// source: E:\xampp\htdocs\projetos\php-mini-framework\phpstan.neon.dist
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_db862b19d0 extends _PHPStan_08e3736ef\Nette\DI\Container
{
	protected $tags = [
		'phpstan.diagnoseExtension' => ['018' => true, '019' => true, '0495' => true, '0496' => true],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'024' => true,
			'032' => true,
			'051' => true,
			'061' => true,
			'071' => true,
			'0151' => true,
			'0157' => true,
			'0167' => true,
			'0168' => true,
			'0171' => true,
			'0199' => true,
			'0226' => true,
			'0527' => true,
			'0880' => true,
			'0881' => true,
			'0882' => true,
			'0883' => true,
			'0884' => true,
			'0885' => true,
			'0886' => true,
			'0887' => true,
			'0888' => true,
			'0889' => true,
			'0890' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'033' => true,
			'036' => true,
			'038' => true,
			'041' => true,
			'055' => true,
			'062' => true,
			'081' => true,
			'082' => true,
			'087' => true,
			'090' => true,
			'0113' => true,
			'0128' => true,
			'0132' => true,
			'0158' => true,
			'0159' => true,
			'0183' => true,
			'0184' => true,
			'0185' => true,
			'0210' => true,
			'0218' => true,
			'0221' => true,
		],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'034' => true,
			'035' => true,
			'042' => true,
			'044' => true,
			'045' => true,
			'048' => true,
			'049' => true,
			'052' => true,
			'053' => true,
			'054' => true,
			'056' => true,
			'057' => true,
			'058' => true,
			'059' => true,
			'063' => true,
			'066' => true,
			'068' => true,
			'069' => true,
			'073' => true,
			'074' => true,
			'075' => true,
			'077' => true,
			'083' => true,
			'085' => true,
			'088' => true,
			'089' => true,
			'091' => true,
			'093' => true,
			'096' => true,
			'097' => true,
			'0101' => true,
			'0102' => true,
			'0103' => true,
			'0105' => true,
			'0106' => true,
			'0108' => true,
			'0109' => true,
			'0110' => true,
			'0111' => true,
			'0112' => true,
			'0114' => true,
			'0115' => true,
			'0117' => true,
			'0119' => true,
			'0120' => true,
			'0121' => true,
			'0122' => true,
			'0123' => true,
			'0125' => true,
			'0129' => true,
			'0131' => true,
			'0133' => true,
			'0134' => true,
			'0136' => true,
			'0139' => true,
			'0140' => true,
			'0141' => true,
			'0142' => true,
			'0144' => true,
			'0145' => true,
			'0146' => true,
			'0147' => true,
			'0148' => true,
			'0149' => true,
			'0150' => true,
			'0152' => true,
			'0153' => true,
			'0156' => true,
			'0160' => true,
			'0161' => true,
			'0162' => true,
			'0165' => true,
			'0166' => true,
			'0169' => true,
			'0171' => true,
			'0172' => true,
			'0174' => true,
			'0175' => true,
			'0176' => true,
			'0177' => true,
			'0178' => true,
			'0181' => true,
			'0182' => true,
			'0186' => true,
			'0188' => true,
			'0191' => true,
			'0192' => true,
			'0193' => true,
			'0194' => true,
			'0195' => true,
			'0197' => true,
			'0200' => true,
			'0201' => true,
			'0202' => true,
			'0204' => true,
			'0206' => true,
			'0207' => true,
			'0209' => true,
			'0211' => true,
			'0213' => true,
			'0214' => true,
			'0215' => true,
			'0217' => true,
			'0222' => true,
			'0223' => true,
			'0224' => true,
			'0227' => true,
			'0230' => true,
			'0231' => true,
			'0234' => true,
		],
		'phpstan.resultCacheMetaExtension' => ['037' => true],
		'phpstan.dynamicMethodThrowTypeExtension' => ['039' => true, '080' => true, '0228' => true, '0232' => true],
		'phpstan.broker.unaryOperatorTypeSpecifyingExtension' => ['040' => true, '0190' => true],
		'phpstan.broker.operatorTypeSpecifyingExtension' => ['043' => true, '0216' => true],
		'phpstan.functionParameterClosureTypeExtension' => [
			'050' => true,
			'086' => true,
			'0104' => true,
			'0198' => true,
			'0203' => true,
		],
		'phpstan.dynamicFunctionThrowTypeExtension' => [
			'060' => true,
			'064' => true,
			'065' => true,
			'084' => true,
			'094' => true,
			'099' => true,
			'0135' => true,
			'0154' => true,
			'0187' => true,
			'0189' => true,
			'0208' => true,
			'0212' => true,
			'0220' => true,
			'0229' => true,
		],
		'phpstan.functionParameterOutTypeExtension' => ['067' => true, '076' => true, '0143' => true],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => [
			'070' => true,
			'092' => true,
			'095' => true,
			'0116' => true,
			'0157' => true,
			'0163' => true,
			'0180' => true,
			'0205' => true,
		],
		'phpstan.dynamicStaticMethodThrowTypeExtension' => [
			'072' => true,
			'098' => true,
			'0100' => true,
			'0107' => true,
			'0118' => true,
			'0130' => true,
			'0179' => true,
			'0196' => true,
			'0225' => true,
			'0233' => true,
		],
		'phpstan.typeSpecifier.methodTypeSpecifyingExtension' => ['0155' => true],
		'phpstan.broker.propertiesClassReflectionExtension' => ['0164' => true],
		'phpstan.parser.richParserNodeVisitor' => [
			'0238' => true,
			'0239' => true,
			'0240' => true,
			'0241' => true,
			'0242' => true,
			'0243' => true,
			'0244' => true,
			'0245' => true,
			'0247' => true,
			'0248' => true,
			'0249' => true,
			'0250' => true,
			'0251' => true,
			'0252' => true,
			'0253' => true,
			'0254' => true,
			'0255' => true,
			'0256' => true,
			'0257' => true,
			'0258' => true,
			'0259' => true,
			'0260' => true,
			'0261' => true,
			'0262' => true,
		],
		'phpstan.stubFilesExtension' => [
			'0265' => true,
			'0267' => true,
			'0270' => true,
			'0271' => true,
			'0276' => true,
			'0277' => true,
		],
		'phpstan.stmtHandler' => [
			'0294' => true,
			'0295' => true,
			'0296' => true,
			'0297' => true,
			'0298' => true,
			'0299' => true,
			'0300' => true,
			'0301' => true,
			'0302' => true,
			'0303' => true,
			'0304' => true,
			'0305' => true,
			'0306' => true,
			'0307' => true,
			'0308' => true,
			'0309' => true,
			'0310' => true,
			'0311' => true,
			'0312' => true,
			'0313' => true,
			'0314' => true,
			'0315' => true,
			'0316' => true,
			'0317' => true,
			'0318' => true,
			'0319' => true,
			'0320' => true,
			'0321' => true,
			'0322' => true,
			'0323' => true,
			'0324' => true,
			'0325' => true,
		],
		'phpstan.exprHandler' => [
			'0327' => true,
			'0328' => true,
			'0329' => true,
			'0330' => true,
			'0331' => true,
			'0332' => true,
			'0333' => true,
			'0334' => true,
			'0335' => true,
			'0336' => true,
			'0337' => true,
			'0338' => true,
			'0339' => true,
			'0340' => true,
			'0341' => true,
			'0351' => true,
			'0352' => true,
			'0353' => true,
			'0354' => true,
			'0355' => true,
			'0356' => true,
			'0357' => true,
			'0358' => true,
			'0359' => true,
			'0360' => true,
			'0361' => true,
			'0362' => true,
			'0363' => true,
			'0364' => true,
			'0365' => true,
			'0366' => true,
			'0367' => true,
			'0368' => true,
			'0369' => true,
			'0370' => true,
			'0371' => true,
			'0372' => true,
			'0373' => true,
			'0374' => true,
			'0375' => true,
			'0376' => true,
			'0377' => true,
			'0378' => true,
			'0379' => true,
			'0380' => true,
			'0381' => true,
			'0382' => true,
			'0383' => true,
			'0384' => true,
			'0385' => true,
			'0386' => true,
			'0387' => true,
			'0388' => true,
			'0389' => true,
			'0390' => true,
			'0391' => true,
			'0392' => true,
			'0393' => true,
			'0394' => true,
			'0395' => true,
			'0396' => true,
			'0397' => true,
			'0398' => true,
			'0399' => true,
			'0400' => true,
		],
		'phpstan.perFileAnalysisResettable' => ['0344' => true],
		'phpstan.rules.rule' => [
			'0428' => true,
			'0429' => true,
			'0430' => true,
			'0431' => true,
			'0432' => true,
			'0433' => true,
			'0434' => true,
			'0435' => true,
			'0436' => true,
			'0437' => true,
			'0480' => true,
			'0481' => true,
			'0482' => true,
			'0483' => true,
			'0484' => true,
			'0548' => true,
			'0549' => true,
			'0550' => true,
			'0551' => true,
			'0552' => true,
			'0553' => true,
			'0554' => true,
			'0555' => true,
			'0556' => true,
			'0557' => true,
			'0558' => true,
			'0559' => true,
			'0560' => true,
			'0561' => true,
			'0562' => true,
			'0563' => true,
			'0564' => true,
			'0565' => true,
			'0566' => true,
			'0567' => true,
			'0568' => true,
			'0569' => true,
			'0570' => true,
			'0571' => true,
			'0572' => true,
			'0573' => true,
			'0574' => true,
			'0575' => true,
			'0576' => true,
			'0577' => true,
			'0578' => true,
			'0579' => true,
			'0580' => true,
			'0581' => true,
			'0582' => true,
			'0583' => true,
			'0584' => true,
			'0585' => true,
			'0586' => true,
			'0587' => true,
			'0588' => true,
			'0589' => true,
			'0590' => true,
			'0591' => true,
			'0592' => true,
			'0593' => true,
			'0594' => true,
			'0595' => true,
			'0596' => true,
			'0597' => true,
			'0598' => true,
			'0599' => true,
			'0600' => true,
			'0601' => true,
			'0602' => true,
			'0603' => true,
			'0604' => true,
			'0605' => true,
			'0606' => true,
			'0607' => true,
			'0608' => true,
			'0609' => true,
			'0610' => true,
			'0611' => true,
			'0612' => true,
			'0613' => true,
			'0614' => true,
			'0615' => true,
			'0616' => true,
			'0617' => true,
			'0618' => true,
			'0619' => true,
			'0620' => true,
			'0621' => true,
			'0622' => true,
			'0623' => true,
			'0624' => true,
			'0625' => true,
			'0626' => true,
			'0627' => true,
			'0628' => true,
			'0629' => true,
			'0630' => true,
			'0631' => true,
			'0632' => true,
			'0633' => true,
			'0634' => true,
			'0635' => true,
			'0636' => true,
			'0637' => true,
			'0638' => true,
			'0639' => true,
			'0640' => true,
			'0641' => true,
			'0642' => true,
			'0643' => true,
			'0644' => true,
			'0645' => true,
			'0646' => true,
			'0647' => true,
			'0648' => true,
			'0649' => true,
			'0650' => true,
			'0651' => true,
			'0652' => true,
			'0653' => true,
			'0654' => true,
			'0655' => true,
			'0656' => true,
			'0657' => true,
			'0658' => true,
			'0659' => true,
			'0660' => true,
			'0661' => true,
			'0662' => true,
			'0663' => true,
			'0664' => true,
			'0665' => true,
			'0666' => true,
			'0667' => true,
			'0668' => true,
			'0669' => true,
			'0670' => true,
			'0671' => true,
			'0672' => true,
			'0673' => true,
			'0674' => true,
			'0675' => true,
			'0676' => true,
			'0677' => true,
			'0678' => true,
			'0679' => true,
			'0680' => true,
			'0681' => true,
			'0682' => true,
			'0683' => true,
			'0684' => true,
			'0685' => true,
			'0686' => true,
			'0687' => true,
			'0688' => true,
			'0689' => true,
			'0690' => true,
			'0691' => true,
			'0692' => true,
			'0693' => true,
			'0694' => true,
			'0695' => true,
			'0696' => true,
			'0697' => true,
			'0698' => true,
			'0699' => true,
			'0700' => true,
			'0701' => true,
			'0702' => true,
			'0703' => true,
			'0704' => true,
			'0705' => true,
			'0706' => true,
			'0707' => true,
			'0708' => true,
			'0709' => true,
			'0710' => true,
			'0711' => true,
			'0712' => true,
			'0713' => true,
			'0714' => true,
			'0715' => true,
			'0716' => true,
			'0717' => true,
			'0718' => true,
			'0719' => true,
			'0720' => true,
			'0721' => true,
			'0722' => true,
			'0723' => true,
			'0724' => true,
			'0725' => true,
			'0726' => true,
			'0727' => true,
			'0728' => true,
			'0729' => true,
			'0730' => true,
			'0731' => true,
			'0732' => true,
			'0733' => true,
			'0734' => true,
			'0735' => true,
			'0736' => true,
			'0737' => true,
			'0738' => true,
			'0739' => true,
			'0740' => true,
			'0741' => true,
			'0742' => true,
			'0743' => true,
			'0744' => true,
			'0745' => true,
			'0746' => true,
			'0747' => true,
			'0748' => true,
			'0749' => true,
			'0750' => true,
			'0751' => true,
			'0752' => true,
			'0753' => true,
			'0754' => true,
			'0755' => true,
			'0756' => true,
			'0757' => true,
			'0758' => true,
			'0759' => true,
			'0760' => true,
			'0761' => true,
			'0762' => true,
			'0763' => true,
			'0764' => true,
			'0765' => true,
			'0766' => true,
			'0767' => true,
			'0768' => true,
			'0769' => true,
			'0770' => true,
			'0771' => true,
			'0772' => true,
			'0773' => true,
			'0774' => true,
			'0775' => true,
			'0776' => true,
			'0777' => true,
			'0778' => true,
			'0779' => true,
			'0780' => true,
			'0781' => true,
			'0782' => true,
			'0783' => true,
			'0784' => true,
			'0785' => true,
			'0786' => true,
			'0787' => true,
			'0788' => true,
			'0789' => true,
			'0790' => true,
			'0791' => true,
			'0792' => true,
			'0793' => true,
			'0794' => true,
			'0795' => true,
			'0796' => true,
			'0797' => true,
			'0798' => true,
			'0799' => true,
			'0800' => true,
			'0801' => true,
			'0802' => true,
			'0803' => true,
			'0804' => true,
			'0805' => true,
			'0806' => true,
			'0807' => true,
			'0808' => true,
			'0809' => true,
			'0810' => true,
			'0811' => true,
			'0812' => true,
			'0813' => true,
			'0814' => true,
			'0815' => true,
			'0816' => true,
			'0817' => true,
			'0818' => true,
			'0819' => true,
			'0820' => true,
			'0821' => true,
			'0822' => true,
			'0823' => true,
			'0824' => true,
			'0825' => true,
			'0826' => true,
			'0827' => true,
			'0828' => true,
			'0829' => true,
			'0830' => true,
			'0831' => true,
			'0832' => true,
			'0833' => true,
			'0834' => true,
			'0835' => true,
			'0836' => true,
			'0837' => true,
			'0838' => true,
			'0839' => true,
			'0840' => true,
			'0841' => true,
			'0842' => true,
			'0843' => true,
			'0844' => true,
			'0845' => true,
			'0846' => true,
			'0847' => true,
			'0848' => true,
			'0849' => true,
			'0850' => true,
			'0851' => true,
			'0852' => true,
			'0853' => true,
			'0854' => true,
			'0855' => true,
			'0856' => true,
			'0857' => true,
			'0858' => true,
			'0859' => true,
			'0860' => true,
			'0905' => true,
			'0906' => true,
			'0907' => true,
		],
		'phpstan.broker.allowedSubTypesClassReflectionExtension' => ['0520' => true, '0521' => true],
		'phpstan.collector' => [
			'0861' => true,
			'0862' => true,
			'0863' => true,
			'0864' => true,
			'0865' => true,
			'0866' => true,
			'0867' => true,
			'0868' => true,
			'0869' => true,
		],
	];

	protected $types = ['container' => '_PHPStan_08e3736ef\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_PHPStan_08e3736ef\Nette\DI\Container' => [['container']],
		'PHPStan\Process\SystemResources' => [['01']],
		'PHPStan\Process\CpuCoreCounter' => [['02']],
		'PHPStan\Fixable\PhpDoc\PhpDocEditor' => [['03']],
		'PHPStan\Fixable\Patcher' => [['04']],
		'PHPStan\Collectors\RegistryFactory' => [['05']],
		'PHPStan\Collectors\Registry' => [['06']],
		'PHPStan\Dependency\ExportedNodeFetcher' => [['07']],
		'PHPStan\Dependency\ExportedNodeResolver' => [['08']],
		'PHPStan\Dependency\DependencyResolver' => [['09']],
		'PhpParser\NodeVisitorAbstract' => [
			[
				'010',
				'0238',
				'0239',
				'0240',
				'0241',
				'0242',
				'0243',
				'0244',
				'0245',
				'0247',
				'0248',
				'0249',
				'0250',
				'0251',
				'0252',
				'0253',
				'0254',
				'0255',
				'0256',
				'0257',
				'0258',
				'0259',
				'0260',
				'0261',
				'0262',
				'0528',
				'0871',
			],
		],
		'PhpParser\NodeVisitor' => [
			[
				'010',
				'0238',
				'0239',
				'0240',
				'0241',
				'0242',
				'0243',
				'0244',
				'0245',
				'0247',
				'0248',
				'0249',
				'0250',
				'0251',
				'0252',
				'0253',
				'0254',
				'0255',
				'0256',
				'0257',
				'0258',
				'0259',
				'0260',
				'0261',
				'0262',
				'0528',
				'0871',
			],
		],
		'PHPStan\Dependency\ExportedNodeVisitor' => [['010']],
		'PHPStan\Dependency\PackageDependencyResolver' => [['011']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.teamcity',
				'errorFormatter.gitlab',
				'errorFormatter.raw',
				'errorFormatter.junit',
				'errorFormatter.checkstyle',
				'errorFormatter.github',
				'errorFormatter.table',
				'errorFormatter.json',
				'errorFormatter.prettyJson',
			],
			['012'],
		],
		'PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter' => [['errorFormatter.teamcity']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter' => [['012']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\AnalyseApplication' => [['013']],
		'PHPStan\Command\AnalyserRunner' => [['014']],
		'PHPStan\Command\BootstrapFilesRunner' => [['015']],
		'PHPStan\Command\FixerWorkerRunner' => [['016']],
		'PHPStan\Command\FixerApplication' => [['017']],
		'PHPStan\Diagnose\DiagnoseExtension' => [['018', '019', '0495', '0496']],
		'PHPStan\Diagnose\SystemResourcesDiagnoseExtension' => [['018']],
		'PHPStan\Turbo\TurboDiagnoseExtension' => [['019']],
		'PHPStan\Type\BitwiseFlagHelper' => [['020']],
		'PHPStan\Type\TypeAliasResolverProvider' => [['021']],
		'PHPStan\Type\LazyTypeAliasResolverProvider' => [['021']],
		'PHPStan\Type\Constant\OversizedArrayBuilder' => [['022']],
		'PHPStan\Type\TypeAliasResolver' => [['023']],
		'PHPStan\Type\UsefulTypeAliasResolver' => [['023']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [
			[
				'024',
				'032',
				'051',
				'061',
				'071',
				'0151',
				'0157',
				'0167',
				'0168',
				'0171',
				'0199',
				'0226',
				'0527',
				'0880',
				'0881',
				'0882',
				'0883',
				'0884',
				'0885',
				'0886',
				'0887',
				'0888',
				'0889',
				'0890',
			],
		],
		'PHPStan\Type\PHPStan\ClassNameUsageLocationCreateIdentifierDynamicReturnTypeExtension' => [['024']],
		'PHPStan\Type\ClosureTypeFactory' => [['025']],
		'PHPStan\Type\FileTypeMapper' => [0 => ['026'], 2 => [1 => 'stubFileTypeMapper']],
		'PHPStan\Type\UnaryOperatorTypeSpecifyingExtensionRegistry' => [['027']],
		'PHPStan\Type\DynamicReturnTypeExtensionRegistry' => [['028']],
		'PHPStan\Type\ArrayUnpackingHelper' => [['029']],
		'PHPStan\Type\Regex\RegexGroupParser' => [['030']],
		'PHPStan\Type\Regex\RegexExpressionHelper' => [['031']],
		'PHPStan\Type\Php\DateIntervalFormatDynamicReturnTypeExtension' => [['032']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'033',
				'036',
				'038',
				'041',
				'055',
				'062',
				'081',
				'082',
				'087',
				'090',
				'0113',
				'0128',
				'0132',
				'0158',
				'0159',
				'0183',
				'0184',
				'0185',
				'0210',
				'0218',
				'0221',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'033',
				'036',
				'038',
				'041',
				'055',
				'062',
				'081',
				'082',
				'087',
				'090',
				'0113',
				'0128',
				'0132',
				'0155',
				'0158',
				'0159',
				'0183',
				'0184',
				'0185',
				'0210',
				'0218',
				'0221',
			],
		],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['033']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'034',
				'035',
				'042',
				'044',
				'045',
				'048',
				'049',
				'052',
				'053',
				'054',
				'056',
				'057',
				'058',
				'059',
				'063',
				'066',
				'068',
				'069',
				'073',
				'074',
				'075',
				'077',
				'083',
				'085',
				'088',
				'089',
				'091',
				'093',
				'096',
				'097',
				'0101',
				'0102',
				'0103',
				'0105',
				'0106',
				'0108',
				'0109',
				'0110',
				'0111',
				'0112',
				'0114',
				'0115',
				'0117',
				'0119',
				'0120',
				'0121',
				'0122',
				'0123',
				'0125',
				'0129',
				'0131',
				'0133',
				'0134',
				'0136',
				'0139',
				'0140',
				'0141',
				'0142',
				'0144',
				'0145',
				'0146',
				'0147',
				'0148',
				'0149',
				'0150',
				'0152',
				'0153',
				'0156',
				'0160',
				'0161',
				'0162',
				'0165',
				'0166',
				'0169',
				'0171',
				'0172',
				'0174',
				'0175',
				'0176',
				'0177',
				'0178',
				'0181',
				'0182',
				'0186',
				'0188',
				'0191',
				'0192',
				'0193',
				'0194',
				'0195',
				'0197',
				'0200',
				'0201',
				'0202',
				'0204',
				'0206',
				'0207',
				'0209',
				'0211',
				'0213',
				'0214',
				'0215',
				'0217',
				'0222',
				'0223',
				'0224',
				'0227',
				'0230',
				'0231',
				'0234',
			],
		],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['034']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['035']],
		'PHPStan\Type\Php\PregMatchTypeSpecifyingExtension' => [['036']],
		'PHPStan\Analyser\ResultCache\ResultCacheMetaExtension' => [['037']],
		'PHPStan\Type\Php\OpenSslCipherMethodsProvider' => [['037']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['038']],
		'PHPStan\Type\DynamicMethodThrowTypeExtension' => [['039', '080', '0228', '0232']],
		'PHPStan\Type\Php\DomDocumentCreateElementDynamicThrowTypeExtension' => [['039']],
		'PHPStan\Type\UnaryOperatorTypeSpecifyingExtension' => [['040', '0190']],
		'PHPStan\Type\Php\BcMathNumberUnaryOperatorTypeSpecifyingExtension' => [['040']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['041']],
		'PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension' => [['042']],
		'PHPStan\Type\OperatorTypeSpecifyingExtension' => [['043', '0216']],
		'PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension' => [['043']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['044']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['045']],
		'PHPStan\Type\Php\IdateFunctionReturnTypeHelper' => [['046']],
		'PHPStan\Type\Php\ArrayColumnHelper' => [['047']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['048']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['049']],
		'PHPStan\Type\FunctionParameterClosureTypeExtension' => [['050', '086', '0104', '0198', '0203']],
		'PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension' => [['050']],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['051']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['052']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['053']],
		'PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension' => [['054']],
		'PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension' => [['055']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['056']],
		'PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension' => [['057']],
		'PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension' => [['058']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['059']],
		'PHPStan\Type\DynamicFunctionThrowTypeExtension' => [
			['060', '064', '065', '084', '094', '099', '0135', '0154', '0187', '0189', '0208', '0212', '0220', '0229'],
		],
		'PHPStan\Type\Php\RoundFunctionThrowTypeExtension' => [['060']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['061']],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['062']],
		'PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension' => [['063']],
		'PHPStan\Type\Php\MinMaxFunctionThrowTypeExtension' => [['064']],
		'PHPStan\Type\Php\FilterFunctionsThrowTypeExtension' => [['065']],
		'PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension' => [['066']],
		'PHPStan\Type\FunctionParameterOutTypeExtension' => [['067', '076', '0143']],
		'PHPStan\Type\Php\PregMatchParameterOutTypeExtension' => [['067']],
		'PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension' => [['068']],
		'PHPStan\Type\Php\OpensslCipherFunctionsReturnTypeExtension' => [['069']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [
			['070', '092', '095', '0116', '0157', '0163', '0180', '0205'],
		],
		'PHPStan\Type\Php\PDOConnectReturnTypeExtension' => [['070']],
		'PHPStan\Type\Php\DomDocumentCreateElementDynamicReturnTypeExtension' => [['071']],
		'PHPStan\Type\DynamicStaticMethodThrowTypeExtension' => [
			['072', '098', '0100', '0107', '0118', '0130', '0179', '0196', '0225', '0233'],
		],
		'PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension' => [['072']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['073']],
		'PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension' => [['074']],
		'PHPStan\Type\Php\CompactFunctionReturnTypeExtension' => [['075']],
		'PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension' => [['076']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['077']],
		'PHPStan\Type\Php\ArrayCombineHelper' => [['078']],
		'PHPStan\Type\Php\DateIntervalFormatReturnTypeHelper' => [['079']],
		'PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension' => [['080']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['081']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['082']],
		'PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension' => [['083']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicThrowTypeExtension' => [['084']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['085']],
		'PHPStan\Type\Php\ArrayWalkParameterClosureTypeExtension' => [['086']],
		'PHPStan\Type\Php\StrContainingTypeSpecifyingExtension' => [['087']],
		'PHPStan\Type\Php\ConstantFunctionReturnTypeExtension' => [['088']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['089']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['090']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['091']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['092']],
		'PHPStan\Type\Php\OutputBufferingDynamicReturnTypeExtension' => [['093']],
		'PHPStan\Type\Php\GetClassFunctionThrowTypeExtension' => [['094']],
		'PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension' => [['095']],
		'PHPStan\Type\Php\SubstrDynamicReturnTypeExtension' => [['096']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['097']],
		'PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension' => [['098']],
		'PHPStan\Type\Php\IntdivThrowTypeExtension' => [['099']],
		'PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension' => [['0100']],
		'PHPStan\Type\Php\LtrimFunctionReturnTypeExtension' => [['0101']],
		'PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension' => [['0102']],
		'PHPStan\Type\Php\StrlenFunctionReturnTypeExtension' => [['0103']],
		'PHPStan\Type\Php\ArrayMapParameterClosureTypeExtension' => [['0104']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0105']],
		'PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension' => [['0106']],
		'PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension' => [['0107']],
		'PHPStan\Type\Php\ArrayFirstLastDynamicReturnTypeExtension' => [['0108']],
		'PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension' => [['0109']],
		'PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension' => [['0110']],
		'PHPStan\Type\Php\StrShuffleFunctionReturnTypeExtension' => [['0111']],
		'PHPStan\Type\Php\ArrayPadDynamicReturnTypeExtension' => [['0112']],
		'PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension' => [['0113']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0114']],
		'PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension' => [['0115']],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0116']],
		'PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension' => [['0117']],
		'PHPStan\Type\Php\DateIntervalCreateFromDateStringThrowTypeExtension' => [['0118']],
		'PHPStan\Type\Php\StrTokFunctionReturnTypeExtension' => [['0119']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0120']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0121']],
		'PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension' => [['0122']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0123']],
		'PHPStan\Type\Php\RegexArrayShapeMatcher' => [['0124']],
		'PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension' => [['0125']],
		'PHPStan\Type\Php\FilterFunctionReturnTypeHelper' => [['0126']],
		'PHPStan\Type\Php\FilterFunctionFlagsHelper' => [['0127']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0128']],
		'PHPStan\Type\Php\StrrevFunctionReturnTypeExtension' => [['0129']],
		'PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension' => [['0130']],
		'PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension' => [['0131']],
		'PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension' => [['0132']],
		'PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension' => [['0133']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0134']],
		'PHPStan\Type\Php\JsonThrowTypeExtension' => [['0135']],
		'PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension' => [['0136']],
		'PHPStan\Type\Php\PrintfFormatParser' => [['0137']],
		'PHPStan\Type\Php\DateFunctionReturnTypeHelper' => [['0138']],
		'PHPStan\Type\Php\PgDmlDynamicReturnTypeExtension' => [['0139']],
		'PHPStan\Type\Php\DateFunctionReturnTypeExtension' => [['0140']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0141']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0142']],
		'PHPStan\Type\Php\ParseStrParameterOutTypeExtension' => [['0143']],
		'PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension' => [['0144']],
		'PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension' => [['0145']],
		'PHPStan\Type\Php\HashFunctionsReturnTypeExtension' => [['0146']],
		'PHPStan\Type\Php\IdateFunctionReturnTypeExtension' => [['0147']],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['0148']],
		'PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension' => [['0149']],
		'PHPStan\Type\Php\ArrayCountValuesDynamicReturnTypeExtension' => [['0150']],
		'PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension' => [['0151']],
		'PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension' => [['0152']],
		'PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension' => [['0153']],
		'PHPStan\Type\Php\PrintfFunctionThrowTypeExtension' => [['0154']],
		'PHPStan\Type\MethodTypeSpecifyingExtension' => [['0155']],
		'PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension' => [['0155']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['0156']],
		'PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension' => [['0157']],
		'PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension' => [['0158']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0159']],
		'PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension' => [['0160']],
		'PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension' => [['0161']],
		'PHPStan\Type\Php\GettypeFunctionReturnTypeExtension' => [['0162']],
		'PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension' => [['0163']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['0164', '0504', '0516', '0523']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0164']],
		'PHPStan\Type\Php\RoundFunctionReturnTypeExtension' => [['0165']],
		'PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension' => [['0166']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0167']],
		'PHPStan\Type\Php\RandomizerMethodReturnTypeExtension' => [['0168']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0169']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper' => [['0170']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0171']],
		'PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension' => [['0172']],
		'PHPStan\Type\Php\ConstantHelper' => [['0173']],
		'PHPStan\Type\Php\PowFunctionReturnTypeExtension' => [['0174']],
		'PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension' => [['0175']],
		'PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension' => [['0176']],
		'PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension' => [['0177']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0178']],
		'PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension' => [['0179']],
		'PHPStan\Type\Php\ClosureGetCurrentDynamicReturnTypeExtension' => [['0180']],
		'PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension' => [['0181']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0182']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0183']],
		'PHPStan\Type\Php\StrlenFunctionTypeSpecifyingExtension' => [['0184']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0185']],
		'PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension' => [['0186']],
		'PHPStan\Type\Php\StrSplitFunctionThrowTypeExtension' => [['0187']],
		'PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension' => [['0188']],
		'PHPStan\Type\Php\ArrayChunkFunctionThrowTypeExtension' => [['0189']],
		'PHPStan\Type\Php\GmpUnaryOperatorTypeSpecifyingExtension' => [['0190']],
		'PHPStan\Type\Php\DateIntervalFormatFunctionReturnTypeExtension' => [['0191']],
		'PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension' => [['0192']],
		'PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension' => [['0193']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0194']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['0195']],
		'PHPStan\Type\Php\ReflectionClassConstantConstructorThrowTypeExtension' => [['0196']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0197']],
		'PHPStan\Type\Php\ArrayFindParameterClosureTypeExtension' => [['0198']],
		'PHPStan\Type\Php\ThrowableReturnTypeExtension' => [['0199']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0200']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0201']],
		'PHPStan\Type\Php\PgResultStatusDynamicReturnTypeExtension' => [['0202']],
		'PHPStan\Type\Php\ArrayFilterParameterClosureTypeExtension' => [['0203']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension' => [['0204']],
		'PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension' => [['0205']],
		'PHPStan\Type\Php\LocaltimeFunctionDynamicReturnTypeExtension' => [['0206']],
		'PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension' => [['0207']],
		'PHPStan\Type\Php\AssertThrowTypeExtension' => [['0208']],
		'PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension' => [['0209']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0210']],
		'PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension' => [['0211']],
		'PHPStan\Type\Php\UnserializeFunctionThrowTypeExtension' => [['0212']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0213']],
		'PHPStan\Type\Php\PgLastNoticeDynamicReturnTypeExtension' => [['0214']],
		'PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension' => [['0215']],
		'PHPStan\Type\Php\GmpOperatorTypeSpecifyingExtension' => [['0216']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0217']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0218']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper' => [['0219']],
		'PHPStan\Type\Php\ArrayCombineFunctionThrowTypeExtension' => [['0220']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0221']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0222']],
		'PHPStan\Type\Php\IniGetReturnTypeExtension' => [['0223']],
		'PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension' => [['0224']],
		'PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension' => [['0225']],
		'PHPStan\Type\Php\DateFormatMethodReturnTypeExtension' => [['0226']],
		'PHPStan\Type\Php\StrPadFunctionReturnTypeExtension' => [['0227']],
		'PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension' => [['0228']],
		'PHPStan\Type\Php\TriggerErrorFunctionThrowTypeExtension' => [['0229']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0230']],
		'PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension' => [['0231']],
		'PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension' => [['0232']],
		'PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension' => [['0233']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['0234']],
		'PHPStan\Type\OperatorTypeSpecifyingExtensionRegistry' => [['0235']],
		'PhpParser\PrettyPrinter\Standard' => [1 => ['0236']],
		'PhpParser\PrettyPrinterAbstract' => [1 => ['0236']],
		'PhpParser\PrettyPrinter' => [1 => ['0236']],
		'PHPStan\Node\Printer\Printer' => [['0236']],
		'PHPStan\Node\Printer\ExprPrinter' => [['0237']],
		'PHPStan\Parser\ArrayMapArgVisitor' => [['0238']],
		'PHPStan\Parser\ParentStmtTypesVisitor' => [['0239']],
		'PHPStan\Parser\ArrayFilterArgVisitor' => [['0240']],
		'PHPStan\Parser\MagicConstantParamDefaultVisitor' => [['0241']],
		'PHPStan\Parser\ClosureArgVisitor' => [['0242']],
		'PHPStan\Parser\TryCatchTypeVisitor' => [['0243']],
		'PHPStan\Parser\ImplodeArgVisitor' => [['0244']],
		'PHPStan\Parser\LastConditionVisitor' => [['0245']],
		'PHPStan\Parser\LexerFactory' => [['0246']],
		'PHPStan\Parser\ArrayOffsetNormalizingVisitor' => [['0247']],
		'PHPStan\Parser\ArrowFunctionArgVisitor' => [['0248']],
		'PHPStan\Parser\ImmediatelyInvokedClosureVisitor' => [['0249']],
		'PHPStan\Parser\StandaloneThrowExprVisitor' => [['0250']],
		'PHPStan\Parser\TypeTraverserInstanceofVisitor' => [['0251']],
		'PHPStan\Parser\CurlSetOptArgVisitor' => [['0252']],
		'PHPStan\Parser\CurlSetOptArrayArgVisitor' => [['0253']],
		'PHPStan\Parser\DeclarePositionVisitor' => [['0254']],
		'PHPStan\Parser\UseAliasVisitor' => [['0255']],
		'PHPStan\Parser\ClosureBindArgVisitor' => [['0256']],
		'PHPStan\Parser\GotoLabelVisitor' => [['0257']],
		'PHPStan\Parser\AnonymousClassVisitor' => [['0258']],
		'PHPStan\Parser\ClosureBindToVarVisitor' => [['0259']],
		'PHPStan\Parser\ArrayFindArgVisitor' => [['0260']],
		'PHPStan\Parser\NewAssignedToPropertyVisitor' => [['0261']],
		'PHPStan\Parser\ArrayWalkArgVisitor' => [['0262']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['0263']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['0264']],
		'PHPStan\PhpDoc\StubFilesExtension' => [['0265', '0267', '0270', '0271', '0276', '0277']],
		'PHPStan\PhpDoc\JsonValidateStubFilesExtension' => [['0265']],
		'PHPStan\PhpDoc\StubFilesProvider' => [['0266']],
		'PHPStan\PhpDoc\DefaultStubFilesProvider' => [['0266']],
		'PHPStan\PhpDoc\ExtDsStubFilesExtension' => [['0267']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['0268']],
		'PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider' => [['0268']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['0269']],
		'PHPStan\PhpDoc\BcMathNumberStubFilesExtension' => [['0270']],
		'PHPStan\PhpDoc\ReflectionClassStubFilesExtension' => [['0271']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['0272']],
		'PHPStan\PhpDoc\StubValidator' => [['0273']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['0274']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['0275']],
		'PHPStan\PhpDoc\ReflectionEnumStubFilesExtension' => [['0276']],
		'PHPStan\PhpDoc\SocketSelectStubFilesExtension' => [['0277']],
		'PHPStan\Analyser\LocalIgnoresProcessor' => [['0278']],
		'PHPStan\Analyser\ConstantResolver' => [['0279']],
		'PHPStan\Analyser\VarAnnotationProcessor' => [['0280']],
		'PHPStan\Analyser\CalledMethodProcessor' => [['0281']],
		'PHPStan\Analyser\ConstantResolverFactory' => [['0282']],
		'PHPStan\Analyser\Ignore\IgnoreLexer' => [['0283']],
		'PHPStan\Analyser\Ignore\IgnoredErrorHelper' => [['0284']],
		'PHPStan\Analyser\ScopeFactory' => [['0285']],
		'PHPStan\Analyser\PropertyHookThrowPointsResolver' => [['0286']],
		'PHPStan\Analyser\RicherScopeGetTypeHelper' => [['0287']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\PhpDocsResolver' => [['0288']],
		'PHPStan\Analyser\PropertyHooksProcessor' => [['0289']],
		'PHPStan\Analyser\NodeScopeResolver' => [['0290']],
		'PHPStan\Analyser\FileAnalyser' => [['0291']],
		'PHPStan\Analyser\ExpressionResultStorageStack' => [['0292']],
		'PHPStan\Analyser\RuleErrorTransformer' => [['0293']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\Analyser\StmtHandler' => [
			[
				'0294',
				'0295',
				'0296',
				'0297',
				'0298',
				'0299',
				'0300',
				'0301',
				'0302',
				'0303',
				'0304',
				'0305',
				'0306',
				'0307',
				'0308',
				'0309',
				'0310',
				'0311',
				'0312',
				'0313',
				'0314',
				'0315',
				'0316',
				'0317',
				'0318',
				'0319',
				'0320',
				'0321',
				'0322',
				'0323',
				'0324',
				'0325',
			],
		],
		'PHPStan\Analyser\StmtHandler\IfHandler' => [['0294']],
		'PHPStan\Analyser\StmtHandler\ForHandler' => [['0295']],
		'PHPStan\Analyser\StmtHandler\UseHandler' => [['0296']],
		'PHPStan\Analyser\StmtHandler\StaticVariableHandler' => [['0297']],
		'PHPStan\Analyser\StmtHandler\DoWhileHandler' => [['0298']],
		'PHPStan\Analyser\StmtHandler\ExpressionHandler' => [['0299']],
		'PHPStan\Analyser\StmtHandler\EnumCaseHandler' => [['0300']],
		'PHPStan\Analyser\StmtHandler\InlineHtmlHandler' => [['0301']],
		'PHPStan\Analyser\StmtHandler\EchoHandler' => [['0302']],
		'PHPStan\Analyser\StmtHandler\GroupUseHandler' => [['0303']],
		'PHPStan\Analyser\StmtHandler\SwitchHandler' => [['0304']],
		'PHPStan\Analyser\StmtHandler\GotoHandler' => [['0305']],
		'PHPStan\Analyser\StmtHandler\ForeachHandler' => [['0306']],
		'PHPStan\Analyser\StmtHandler\BreakContinueHandler' => [['0307']],
		'PHPStan\Analyser\StmtHandler\TraitUseHandler' => [['0308']],
		'PHPStan\Analyser\StmtHandler\LabelHandler' => [['0309']],
		'PHPStan\Analyser\StmtHandler\NamespaceHandler' => [['0310']],
		'PHPStan\Analyser\StmtHandler\TryCatchHandler' => [['0311']],
		'PHPStan\Analyser\StmtHandler\ClassLikeHandler' => [['0312']],
		'PHPStan\Analyser\StmtHandler\WhileHandler' => [['0313']],
		'PHPStan\Analyser\StmtHandler\PropertyHandler' => [['0314']],
		'PHPStan\Analyser\StmtHandler\ClassConstHandler' => [['0315']],
		'PHPStan\Analyser\StmtHandler\FunctionHandler' => [['0316']],
		'PHPStan\Analyser\StmtHandler\ClassMethodHandler' => [['0317']],
		'PHPStan\Analyser\StmtHandler\BlockHandler' => [['0318']],
		'PHPStan\Analyser\StmtHandler\GlobalHandler' => [['0319']],
		'PHPStan\Analyser\StmtHandler\TraitHandler' => [['0320']],
		'PHPStan\Analyser\StmtHandler\NopHandler' => [['0321']],
		'PHPStan\Analyser\StmtHandler\ConstHandler' => [['0322']],
		'PHPStan\Analyser\StmtHandler\ReturnHandler' => [['0323']],
		'PHPStan\Analyser\StmtHandler\DeclareHandler' => [['0324']],
		'PHPStan\Analyser\StmtHandler\UnsetHandler' => [['0325']],
		'PHPStan\Analyser\Analyser' => [['0326']],
		'PHPStan\Analyser\ExprHandler' => [
			[
				'0327',
				'0328',
				'0329',
				'0330',
				'0331',
				'0332',
				'0333',
				'0334',
				'0335',
				'0336',
				'0337',
				'0338',
				'0339',
				'0340',
				'0341',
				'0351',
				'0352',
				'0353',
				'0354',
				'0355',
				'0356',
				'0357',
				'0358',
				'0359',
				'0360',
				'0361',
				'0362',
				'0363',
				'0364',
				'0365',
				'0366',
				'0367',
				'0368',
				'0369',
				'0370',
				'0371',
				'0372',
				'0373',
				'0374',
				'0375',
				'0376',
				'0377',
				'0378',
				'0379',
				'0380',
				'0381',
				'0382',
				'0383',
				'0384',
				'0385',
				'0386',
				'0387',
				'0388',
				'0389',
				'0390',
				'0391',
				'0392',
				'0393',
				'0394',
				'0395',
				'0396',
				'0397',
				'0398',
				'0399',
				'0400',
			],
		],
		'PHPStan\Analyser\ExprHandler\PostDecHandler' => [['0327']],
		'PHPStan\Analyser\ExprHandler\PrintHandler' => [['0328']],
		'PHPStan\Analyser\ExprHandler\BooleanOrHandler' => [['0329']],
		'PHPStan\Analyser\ExprHandler\Virtual\InstantiationCallableNodeHandler' => [['0330']],
		'PHPStan\Analyser\ExprHandler\Virtual\ExistingArrayDimFetchHandler' => [['0331']],
		'PHPStan\Analyser\ExprHandler\Virtual\AlwaysRememberedExprHandler' => [['0332']],
		'PHPStan\Analyser\ExprHandler\Virtual\IssetExprHandler' => [['0333']],
		'PHPStan\Analyser\ExprHandler\Virtual\FunctionCallableNodeHandler' => [['0334']],
		'PHPStan\Analyser\ExprHandler\Virtual\SetExistingOffsetValueTypeExprHandler' => [['0335']],
		'PHPStan\Analyser\ExprHandler\Virtual\SetOffsetValueTypeExprHandler' => [['0336']],
		'PHPStan\Analyser\ExprHandler\Virtual\MethodCallableNodeHandler' => [['0337']],
		'PHPStan\Analyser\ExprHandler\Virtual\TypeExprHandler' => [['0338']],
		'PHPStan\Analyser\ExprHandler\Virtual\NativeTypeExprHandler' => [['0339']],
		'PHPStan\Analyser\ExprHandler\Virtual\StaticMethodCallableNodeHandler' => [['0340']],
		'PHPStan\Analyser\ExprHandler\Virtual\UnsetOffsetExprHandler' => [['0341']],
		'PHPStan\Analyser\ExprHandler\Helper\EarlyTerminatingCallHelper' => [['0342']],
		'PHPStan\Analyser\ExprHandler\Helper\MethodThrowPointHelper' => [['0343']],
		'PHPStan\Analyser\PerFileAnalysisResettable' => [['0344']],
		'PHPStan\Analyser\ExprHandler\Helper\ClosureTypeResolver' => [['0344']],
		'PHPStan\Analyser\ExprHandler\Helper\NonNullabilityHelper' => [['0345']],
		'PHPStan\Analyser\ExprHandler\Helper\ConditionalExpressionHolderHelper' => [['0346']],
		'PHPStan\Analyser\ExprHandler\Helper\ImplicitToStringCallHelper' => [['0347']],
		'PHPStan\Analyser\ExprHandler\Helper\EqualityTypeSpecifyingHelper' => [['0348']],
		'PHPStan\Analyser\ExprHandler\Helper\MethodCallReturnTypeHelper' => [['0349']],
		'PHPStan\Analyser\ExprHandler\Helper\FuncCallScopeEffectsHelper' => [['0350']],
		'PHPStan\Analyser\ExprHandler\ThrowHandler' => [['0351']],
		'PHPStan\Analyser\ExprHandler\CloneHandler' => [['0352']],
		'PHPStan\Analyser\ExprHandler\AssignOpHandler' => [['0353']],
		'PHPStan\Analyser\ExprHandler\CoalesceHandler' => [['0354']],
		'PHPStan\Analyser\ExprHandler\AssignHandler' => [['0355']],
		'PHPStan\Analyser\ExprHandler\YieldHandler' => [['0356']],
		'PHPStan\Analyser\ExprHandler\EmptyHandler' => [['0357']],
		'PHPStan\Analyser\ExprHandler\YieldFromHandler' => [['0358']],
		'PHPStan\Analyser\ExprHandler\ScalarHandler' => [['0359']],
		'PHPStan\Analyser\ExprHandler\BinaryOpHandler' => [['0360']],
		'PHPStan\Analyser\ExprHandler\PreIncHandler' => [['0361']],
		'PHPStan\Analyser\ExprHandler\ArrayDimFetchHandler' => [['0362']],
		'PHPStan\Analyser\ExprHandler\EvalHandler' => [['0363']],
		'PHPStan\Analyser\ExprHandler\FirstClassCallableFuncCallHandler' => [['0364']],
		'PHPStan\Analyser\ExprHandler\FirstClassCallableStaticCallHandler' => [['0365']],
		'PHPStan\Analyser\ExprHandler\BitwiseNotHandler' => [['0366']],
		'PHPStan\Analyser\ExprHandler\PropertyFetchHandler' => [['0367']],
		'PHPStan\Analyser\ExprHandler\NullsafeMethodCallHandler' => [['0368']],
		'PHPStan\Analyser\ExprHandler\PipeHandler' => [['0369']],
		'PHPStan\Analyser\ExprHandler\ClosureHandler' => [['0370']],
		'PHPStan\Analyser\ExprHandler\ErrorSuppressHandler' => [['0371']],
		'PHPStan\Analyser\ExprHandler\ShellExecHandler' => [['0372']],
		'PHPStan\Analyser\ExprHandler\ConstFetchHandler' => [['0373']],
		'PHPStan\Analyser\ExprHandler\CastHandler' => [['0374']],
		'PHPStan\Analyser\ExprHandler\ArrayHandler' => [['0375']],
		'PHPStan\Analyser\ExprHandler\IncludeHandler' => [['0376']],
		'PHPStan\Analyser\ExprHandler\MethodCallHandler' => [['0377']],
		'PHPStan\Analyser\ExprHandler\CastStringHandler' => [['0378']],
		'PHPStan\Analyser\ExprHandler\PreDecHandler' => [['0379']],
		'PHPStan\Analyser\ExprHandler\UnaryPlusHandler' => [['0380']],
		'PHPStan\Analyser\ExprHandler\MatchHandler' => [['0381']],
		'PHPStan\Analyser\ExprHandler\TernaryHandler' => [['0382']],
		'PHPStan\Analyser\ExprHandler\InstanceofHandler' => [['0383']],
		'PHPStan\Analyser\ExprHandler\ArrowFunctionHandler' => [['0384']],
		'PHPStan\Analyser\ExprHandler\FirstClassCallableMethodCallHandler' => [['0385']],
		'PHPStan\Analyser\ExprHandler\StaticCallHandler' => [['0386']],
		'PHPStan\Analyser\ExprHandler\FuncCallHandler' => [['0387']],
		'PHPStan\Analyser\ExprHandler\InterpolatedStringHandler' => [['0388']],
		'PHPStan\Analyser\ExprHandler\FirstClassCallableNewHandler' => [['0389']],
		'PHPStan\Analyser\ExprHandler\ClassConstFetchHandler' => [['0390']],
		'PHPStan\Analyser\ExprHandler\BooleanAndHandler' => [['0391']],
		'PHPStan\Analyser\ExprHandler\NewHandler' => [['0392']],
		'PHPStan\Analyser\ExprHandler\UnaryMinusHandler' => [['0393']],
		'PHPStan\Analyser\ExprHandler\ExitHandler' => [['0394']],
		'PHPStan\Analyser\ExprHandler\VariableHandler' => [['0395']],
		'PHPStan\Analyser\ExprHandler\NullsafePropertyFetchHandler' => [['0396']],
		'PHPStan\Analyser\ExprHandler\IssetHandler' => [['0397']],
		'PHPStan\Analyser\ExprHandler\BooleanNotHandler' => [['0398']],
		'PHPStan\Analyser\ExprHandler\PostIncHandler' => [['0399']],
		'PHPStan\Analyser\ExprHandler\StaticPropertyFetchHandler' => [['0400']],
		'PHPStan\Analyser\DeprecatedAttributeResolver' => [['0401']],
		'PHPStan\Analyser\ResultCache\ResultCacheClearer' => [['0402']],
		'PHPStan\Analyser\AnalyserResultFinalizer' => [['0403']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['0404']],
		'PHPStan\DependencyInjection\Container' => [['0406'], ['0405']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['0405']],
		'PHPStan\DependencyInjection\MemoizingContainer' => [['0406']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['0407']],
		'PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider' => [['0407']],
		'PHPStan\File\RelativePathHelper' => [
			0 => ['relativePathHelper'],
			2 => [1 => 'simpleRelativePathHelper', 'parentDirectoryRelativePathHelper'],
		],
		'PHPStan\File\FuzzyRelativePathHelper' => [['relativePathHelper']],
		'PHPStan\File\FileHelper' => [['0408']],
		'PHPStan\File\IncludedFilePathResolver' => [['0409']],
		'PHPStan\File\FileExcluderFactory' => [['0410']],
		'PHPStan\File\DirectoryWalker' => [['0411']],
		'PHPStan\File\FileMonitor' => [['0412']],
		'PHPStan\File\FileContentHasher' => [['0413']],
		'PHPStan\Internal\HttpClientFactory' => [['0414']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['0415']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck' => [['0416']],
		'PHPStan\Rules\Playground\NeverRuleHelper' => [['0417']],
		'PHPStan\Rules\Variables\ParameterOutTypeCheck' => [['0418']],
		'PHPStan\Rules\ClassNameCheck' => [['0419']],
		'PHPStan\Rules\Classes\DuplicateDeclarationHelper' => [['0420']],
		'PHPStan\Rules\Classes\PropertyTagCheck' => [['0421']],
		'PHPStan\Rules\Classes\LocalTypeAliasesCheck' => [['0422']],
		'PHPStan\Rules\Classes\ConsistentConstructorHelper' => [['0423']],
		'PHPStan\Rules\Classes\MixinCheck' => [['0424']],
		'PHPStan\Rules\Classes\MethodTagCheck' => [['0425']],
		'PHPStan\Rules\Pure\FunctionPurityCheck' => [['0426']],
		'PHPStan\Rules\NullsafeCheck' => [['0427']],
		'PHPStan\Rules\Rule' => [
			[
				'0428',
				'0429',
				'0430',
				'0431',
				'0432',
				'0433',
				'0434',
				'0435',
				'0436',
				'0437',
				'0469',
				'0480',
				'0481',
				'0482',
				'0483',
				'0484',
				'0891',
				'0892',
				'0893',
				'0894',
				'0895',
				'0896',
				'0900',
				'0903',
				'0904',
				'0905',
				'0906',
				'0907',
				'0908',
				'0909',
				'0910',
				'0911',
				'0912',
				'0913',
				'0914',
			],
			[
				'0548',
				'0549',
				'0550',
				'0551',
				'0552',
				'0553',
				'0554',
				'0555',
				'0556',
				'0557',
				'0558',
				'0559',
				'0560',
				'0561',
				'0562',
				'0563',
				'0564',
				'0565',
				'0566',
				'0567',
				'0568',
				'0569',
				'0570',
				'0571',
				'0572',
				'0573',
				'0574',
				'0575',
				'0576',
				'0577',
				'0578',
				'0579',
				'0580',
				'0581',
				'0582',
				'0583',
				'0584',
				'0585',
				'0586',
				'0587',
				'0588',
				'0589',
				'0590',
				'0591',
				'0592',
				'0593',
				'0594',
				'0595',
				'0596',
				'0597',
				'0598',
				'0599',
				'0600',
				'0601',
				'0602',
				'0603',
				'0604',
				'0605',
				'0606',
				'0607',
				'0608',
				'0609',
				'0610',
				'0611',
				'0612',
				'0613',
				'0614',
				'0615',
				'0616',
				'0617',
				'0618',
				'0619',
				'0620',
				'0621',
				'0622',
				'0623',
				'0624',
				'0625',
				'0626',
				'0627',
				'0628',
				'0629',
				'0630',
				'0631',
				'0632',
				'0633',
				'0634',
				'0635',
				'0636',
				'0637',
				'0638',
				'0639',
				'0640',
				'0641',
				'0642',
				'0643',
				'0644',
				'0645',
				'0646',
				'0647',
				'0648',
				'0649',
				'0650',
				'0651',
				'0652',
				'0653',
				'0654',
				'0655',
				'0656',
				'0657',
				'0658',
				'0659',
				'0660',
				'0661',
				'0662',
				'0663',
				'0664',
				'0665',
				'0666',
				'0667',
				'0668',
				'0669',
				'0670',
				'0671',
				'0672',
				'0673',
				'0674',
				'0675',
				'0676',
				'0677',
				'0678',
				'0679',
				'0680',
				'0681',
				'0682',
				'0683',
				'0684',
				'0685',
				'0686',
				'0687',
				'0688',
				'0689',
				'0690',
				'0691',
				'0692',
				'0693',
				'0694',
				'0695',
				'0696',
				'0697',
				'0698',
				'0699',
				'0700',
				'0701',
				'0702',
				'0703',
				'0704',
				'0705',
				'0706',
				'0707',
				'0708',
				'0709',
				'0710',
				'0711',
				'0712',
				'0713',
				'0714',
				'0715',
				'0716',
				'0717',
				'0718',
				'0719',
				'0720',
				'0721',
				'0722',
				'0723',
				'0724',
				'0725',
				'0726',
				'0727',
				'0728',
				'0729',
				'0730',
				'0731',
				'0732',
				'0733',
				'0734',
				'0735',
				'0736',
				'0737',
				'0738',
				'0739',
				'0740',
				'0741',
				'0742',
				'0743',
				'0744',
				'0745',
				'0746',
				'0747',
				'0748',
				'0749',
				'0750',
				'0751',
				'0752',
				'0753',
				'0754',
				'0755',
				'0756',
				'0757',
				'0758',
				'0759',
				'0760',
				'0761',
				'0762',
				'0763',
				'0764',
				'0765',
				'0766',
				'0767',
				'0768',
				'0769',
				'0770',
				'0771',
				'0772',
				'0773',
				'0774',
				'0775',
				'0776',
				'0777',
				'0778',
				'0779',
				'0780',
				'0781',
				'0782',
				'0783',
				'0784',
				'0785',
				'0786',
				'0787',
				'0788',
				'0789',
				'0790',
				'0791',
				'0792',
				'0793',
				'0794',
				'0795',
				'0796',
				'0797',
				'0798',
				'0799',
				'0800',
				'0801',
				'0802',
				'0803',
				'0804',
				'0805',
				'0806',
				'0807',
				'0808',
				'0809',
				'0810',
				'0811',
				'0812',
				'0813',
				'0814',
				'0815',
				'0816',
				'0817',
				'0818',
				'0819',
				'0820',
				'0821',
				'0822',
				'0823',
				'0824',
				'0825',
				'0826',
				'0827',
				'0828',
				'0829',
				'0830',
				'0831',
				'0832',
				'0833',
				'0834',
				'0835',
				'0836',
				'0837',
				'0838',
				'0839',
				'0840',
				'0841',
				'0842',
				'0843',
				'0844',
				'0845',
				'0846',
				'0847',
				'0848',
				'0849',
				'0850',
				'0851',
				'0852',
				'0853',
				'0854',
				'0855',
				'0856',
				'0857',
				'0858',
				'0859',
				'0860',
			],
		],
		'PHPStan\Rules\RestrictedUsage\RestrictedUsageOfDeprecatedStringCastRule' => [['0428']],
		'PHPStan\Rules\RestrictedUsage\RestrictedFunctionCallableUsageRule' => [['0429']],
		'PHPStan\Rules\RestrictedUsage\RestrictedMethodCallableUsageRule' => [['0430']],
		'PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageRule' => [['0431']],
		'PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodCallableUsageRule' => [['0432']],
		'PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageRule' => [['0433']],
		'PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodUsageRule' => [['0434']],
		'PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageRule' => [['0435']],
		'PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageRule' => [['0436']],
		'PHPStan\Rules\RestrictedUsage\RestrictedStaticPropertyUsageRule' => [['0437']],
		'PHPStan\Rules\DeadCode\PossiblyPureCallTransitivePurityResolver' => [['0438']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\Rules\LazyRegistry' => [['registry']],
		'PHPStan\Rules\NonStringableDynamicAccessCheck' => [['0439']],
		'PHPStan\Rules\IssetCheck' => [['0440']],
		'PHPStan\Rules\Generics\MethodTagTemplateTypeCheck' => [['0441']],
		'PHPStan\Rules\Generics\CrossCheckInterfacesHelper' => [['0442']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['0443']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['0444']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['0445']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['0446']],
		'PHPStan\Rules\ParameterCastableToStringCheck' => [['0447']],
		'PHPStan\Rules\ClassForbiddenNameCheck' => [['0448']],
		'PHPStan\Rules\RuleLevelHelper' => [['0449']],
		'PHPStan\Rules\Comparison\FunctionCallConstantConditionHelper' => [['0450']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['0451']],
		'PHPStan\Rules\Comparison\PossiblyImpureTipHelper' => [['0452']],
		'PHPStan\Rules\Comparison\ConstantConditionInTraitHelper' => [['0453']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['0454']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['0455']],
		'PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper' => [['0456']],
		'PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper' => [['0457']],
		'PHPStan\Rules\PhpDoc\UnresolvableTypeHelper' => [['0458']],
		'PHPStan\Rules\PhpDoc\GenericCallableRuleHelper' => [['0459']],
		'PHPStan\Rules\PhpDoc\AssertRuleHelper' => [['0460']],
		'PHPStan\Rules\PhpDoc\RequireExtendsCheck' => [['0461']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck' => [['0462']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['0463']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['0464']],
		'PHPStan\Rules\Properties\AccessPropertiesCheck' => [['0465']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesCheck' => [['0466']],
		'PHPStan\Rules\MissingTypehintCheck' => [['0467']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['0468']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['0469']],
		'PHPStan\Rules\Methods\StaticMethodCallCheck' => [['0470']],
		'PHPStan\Rules\Methods\MethodPrototypeFinder' => [['0471']],
		'PHPStan\Rules\Methods\ParentMethodHelper' => [['0472']],
		'PHPStan\Rules\Methods\MethodParameterComparisonHelper' => [['0473']],
		'PHPStan\Rules\Methods\MethodVisibilityComparisonHelper' => [['0474']],
		'PHPStan\Rules\Methods\MethodCallCheck' => [['0475']],
		'PHPStan\Rules\Api\ApiRuleHelper' => [['0476']],
		'PHPStan\Rules\Exceptions\TooWideThrowTypeCheck' => [['0477']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck' => [['0478']],
		'PHPStan\Rules\Exceptions\ExceptionTypeResolver' => [1 => ['0479'], [1 => 'exceptionTypeResolver']],
		'PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver' => [['0479']],
		'PHPStan\Rules\Debug\DumpNativeTypeRule' => [['0480']],
		'PHPStan\Rules\Debug\FileAssertRule' => [['0481']],
		'PHPStan\Rules\Debug\DebugScopeRule' => [['0482']],
		'PHPStan\Rules\Debug\DumpTypeRule' => [['0483']],
		'PHPStan\Rules\Debug\DumpPhpDocTypeRule' => [['0484']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['0485']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['0486']],
		'PHPStan\Rules\InternalTag\RestrictedInternalUsageHelper' => [['0487']],
		'PHPStan\Rules\AttributesCheck' => [['0488']],
		'PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck' => [['0489']],
		'PHPStan\Rules\TooWideTypehints\TooWideTypeCheck' => [['0490']],
		'PHPStan\Cache\Cache' => [['0491']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['0492']],
		'PHPStan\Parallel\WorkerRunner' => [['0493']],
		'PHPStan\Parallel\ParallelAnalyser' => [['0494']],
		'PHPStan\Parallel\Scheduler' => [['0495']],
		'PHPStan\Parallel\ForkParallelChecker' => [['0496']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['0497']],
		'PHPStan\Php\ComposerPhpVersionFactory' => [['0498']],
		'PHPStan\Php\PhpVersion' => [['0499']],
		'PHPStan\Php\ConfiguredPhpVersionRangeHelper' => [['0500']],
		'PHPStan\Php\PhpVersionFactory' => [['0501']],
		'PHPStan\Reflection\ParameterAllowedConstantsMapProvider' => [['0502']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['0503', '0505', '0515', '0519']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['0503']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['0504']],
		'PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension' => [['0505']],
		'PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension' => [['0506']],
		'PHPStan\Reflection\Deprecation\DeprecationProvider' => [['0507']],
		'PHPStan\Reflection\AttributeReflectionFactory' => [['0508']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['0509']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['0513'], ['0510', '0512']],
		'PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider' => [['0510']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory' => [['0511']],
		'PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider' => [['0512']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['0514']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['0515']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['0516']],
		'PHPStan\Reflection\ConstructorsHelper' => [['0517']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['0518']],
		'PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider' => [['0518']],
		'PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension' => [['0519']],
		'PHPStan\Reflection\AllowedSubTypesClassReflectionExtension' => [['0520', '0521']],
		'PHPStan\Reflection\Php\SealedAllowedSubTypesClassReflectionExtension' => [['0520']],
		'PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension' => [['0521']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['0522']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['0523']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\ExtensionVersionProvider' => [['0524']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory' => [['0525']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory' => [['0526']],
		'PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension' => [['0527']],
		'PHPStan\BetterReflection\Reflector\Reflector' => [['betterReflectionReflector']],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector' => [['betterReflectionReflector']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['0528']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['0529']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['0530']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\PhpFileCleaner' => [['0531']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['0532']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\PreForkDirectorySymbolScanner' => [['0533']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\SymbolFinderInFiles' => [['0534']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['0535']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['0536']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['0537']],
		'PHPStan\Reflection\InitializerExprTypeResolver' => [['0538']],
		'PHPStan\Diagnose\PHPStanDiagnoseExtension' => [2 => ['phpstanDiagnoseExtension']],
		'PHPStan\File\SimpleRelativePathHelper' => [2 => ['simpleRelativePathHelper']],
		'PHPStan\File\ParentDirectoryRelativePathHelper' => [2 => ['parentDirectoryRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [0 => ['reflectionProvider'], 2 => ['betterReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [2 => ['betterReflectionProvider']],
		'PHPStan\Analyser\InternalScopeFactoryFactory' => [['0539']],
		'PHPStan\Analyser\ExpressionResultFactory' => [['0540']],
		'PHPStan\Analyser\ResultCache\ResultCacheManagerFactory' => [['0541']],
		'PHPStan\File\FileExcluderRawFactory' => [['0542']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['0543']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['0544']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['0545']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['0546']],
		'PHPStan\Reflection\ClassReflectionFactory' => [['0547']],
		'PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule' => [['0548']],
		'PHPStan\Rules\Namespaces\ExistingNamesInUseRule' => [['0549']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule' => [['0550']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignOpRule' => [['0551']],
		'PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule' => [['0552']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignmentRule' => [['0553']],
		'PHPStan\Rules\Arrays\ArrayUnpackingRule' => [['0554']],
		'PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule' => [['0555']],
		'PHPStan\Rules\Arrays\IterableInForeachRule' => [['0556']],
		'PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule' => [['0557']],
		'PHPStan\Rules\Arrays\DeadForeachRule' => [['0558']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule' => [['0559']],
		'PHPStan\Rules\Arrays\ArrayDestructuringRule' => [['0560']],
		'PHPStan\Rules\Arrays\UnpackIterableInArrayRule' => [['0561']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule' => [['0562']],
		'PHPStan\Rules\Operators\InvalidUnaryOperationRule' => [['0563']],
		'PHPStan\Rules\Operators\InvalidAssignVarRule' => [['0564']],
		'PHPStan\Rules\Operators\BacktickRule' => [['0565']],
		'PHPStan\Rules\Operators\InvalidIncDecOperationRule' => [['0566']],
		'PHPStan\Rules\Operators\InvalidComparisonOperationRule' => [['0567']],
		'PHPStan\Rules\Operators\InvalidBinaryOperationRule' => [['0568']],
		'PHPStan\Rules\Operators\PipeOperatorRule' => [['0569']],
		'PHPStan\Rules\Variables\ThisInStaticStatementRule' => [['0570']],
		'PHPStan\Rules\Variables\InvalidVariableAssignRule' => [['0571']],
		'PHPStan\Rules\Variables\NullCoalesceRule' => [['0572']],
		'PHPStan\Rules\Variables\ParameterOutExecutionEndTypeRule' => [['0573']],
		'PHPStan\Rules\Variables\ThisInGlobalStatementRule' => [['0574']],
		'PHPStan\Rules\Variables\EmptyRule' => [['0575']],
		'PHPStan\Rules\Variables\DefinedVariableRule' => [['0576']],
		'PHPStan\Rules\Variables\ParameterOutAssignedTypeRule' => [['0577']],
		'PHPStan\Rules\Variables\CompactVariablesRule' => [['0578']],
		'PHPStan\Rules\Variables\UnsetRule' => [['0579']],
		'PHPStan\Rules\Variables\IssetRule' => [['0580']],
		'PHPStan\Rules\Variables\VariableCloningRule' => [['0581']],
		'PHPStan\Rules\Constants\FinalConstantRule' => [['0582']],
		'PHPStan\Rules\Constants\FinalPrivateConstantRule' => [['0583']],
		'PHPStan\Rules\Constants\ConstantRule' => [['0584']],
		'PHPStan\Rules\Constants\NativeTypedClassConstantRule' => [['0585']],
		'PHPStan\Rules\Constants\OverridingConstantRule' => [['0586']],
		'PHPStan\Rules\Constants\DynamicClassConstantFetchRule' => [['0587']],
		'PHPStan\Rules\Constants\MissingClassConstantTypehintRule' => [['0588']],
		'PHPStan\Rules\Constants\MagicConstantContextRule' => [['0589']],
		'PHPStan\Rules\Constants\ValueAssignedToClassConstantRule' => [['0590']],
		'PHPStan\Rules\Constants\ClassAsClassConstantRule' => [['0591']],
		'PHPStan\Rules\Constants\ConstantAttributesRule' => [['0592']],
		'PHPStan\Rules\DateTimeInstantiationRule' => [['0593']],
		'PHPStan\Rules\Classes\MethodTagTraitRule' => [['0594']],
		'PHPStan\Rules\Classes\InstantiationCallableRule' => [['0595']],
		'PHPStan\Rules\Classes\RequireExtendsRule' => [['0596']],
		'PHPStan\Rules\Classes\NonClassAttributeClassRule' => [['0597']],
		'PHPStan\Rules\Classes\ExistingClassInTraitUseRule' => [['0598']],
		'PHPStan\Rules\Classes\MixinRule' => [['0599']],
		'PHPStan\Rules\Classes\AllowedSubTypesRule' => [['0600']],
		'PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule' => [['0601']],
		'PHPStan\Rules\Classes\LocalTypeTraitUseAliasesRule' => [['0602']],
		'PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule' => [['0603']],
		'PHPStan\Rules\Classes\DuplicateDeclarationRule' => [['0604']],
		'PHPStan\Rules\Classes\PropertyTagTraitUseRule' => [['0605']],
		'PHPStan\Rules\Classes\LocalTypeAliasesRule' => [['0606']],
		'PHPStan\Rules\Classes\MixinTraitUseRule' => [['0607']],
		'PHPStan\Rules\Classes\PropertyTagRule' => [['0608']],
		'PHPStan\Rules\Classes\ExistingClassInClassExtendsRule' => [['0609']],
		'PHPStan\Rules\Classes\PropertyTagTraitRule' => [['0610']],
		'PHPStan\Rules\Classes\ClassConstantAttributesRule' => [['0611']],
		'PHPStan\Rules\Classes\MixinTraitRule' => [['0612']],
		'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule' => [['0613']],
		'PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule' => [['0614']],
		'PHPStan\Rules\Classes\ImpossibleInstanceOfRule' => [['0615']],
		'PHPStan\Rules\Classes\EnumSanityRule' => [['0616']],
		'PHPStan\Rules\Classes\NewStaticRule' => [['0617']],
		'PHPStan\Rules\Classes\ReadOnlyClassRule' => [['0618']],
		'PHPStan\Rules\Classes\InstantiationRule' => [['0619']],
		'PHPStan\Rules\Classes\UnusedConstructorParametersRule' => [['0620']],
		'PHPStan\Rules\Classes\ClassConstantRule' => [['0621']],
		'PHPStan\Rules\Classes\ClassAttributesRule' => [['0622']],
		'PHPStan\Rules\Classes\RequireImplementsRule' => [['0623']],
		'PHPStan\Rules\Classes\LocalTypeTraitAliasesRule' => [['0624']],
		'PHPStan\Rules\Classes\TraitAttributeClassRule' => [['0625']],
		'PHPStan\Rules\Classes\MethodTagRule' => [['0626']],
		'PHPStan\Rules\Classes\MethodTagTraitUseRule' => [['0627']],
		'PHPStan\Rules\Classes\InvalidPromotedPropertiesRule' => [['0628']],
		'PHPStan\Rules\Classes\DuplicateTraitDeclarationRule' => [['0629']],
		'PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule' => [['0630']],
		'PHPStan\Rules\Pure\PureFunctionRule' => [['0631']],
		'PHPStan\Rules\Pure\PureMethodRule' => [['0632']],
		'PHPStan\Rules\Pure\PurePropertyHookRule' => [['0633']],
		'PHPStan\Rules\Traits\ConflictingTraitConstantsRule' => [['0634']],
		'PHPStan\Rules\Traits\TraitAttributesRule' => [['0635']],
		'PHPStan\Rules\Traits\ConstantsInTraitsRule' => [['0636']],
		'PHPStan\Rules\Traits\NotAnalysedTraitRule' => [['0637']],
		'PHPStan\Rules\DeadCode\CallToConstructorStatementWithoutImpurePointsRule' => [['0638']],
		'PHPStan\Rules\DeadCode\CallToMethodStatementWithoutImpurePointsRule' => [['0639']],
		'PHPStan\Rules\DeadCode\CallToFunctionStatementWithoutImpurePointsRule' => [['0640']],
		'PHPStan\Rules\DeadCode\CallToStaticMethodStatementWithoutImpurePointsRule' => [['0641']],
		'PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule' => [['0642']],
		'PHPStan\Rules\DeadCode\UnusedPrivateMethodRule' => [['0643']],
		'PHPStan\Rules\DeadCode\UnreachableStatementRule' => [['0644']],
		'PHPStan\Rules\DeadCode\UnusedPrivateConstantRule' => [['0645']],
		'PHPStan\Rules\DeadCode\NoopRule' => [['0646']],
		'PHPStan\Rules\Ignore\IgnoreParseErrorRule' => [['0647']],
		'PHPStan\Rules\Functions\InvalidLexicalVariablesInClosureUseRule' => [['0648']],
		'PHPStan\Rules\Functions\PrintfArrayParametersRule' => [['0649']],
		'PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule' => [['0650']],
		'PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule' => [['0651']],
		'PHPStan\Rules\Functions\CallToNonExistentFunctionRule' => [['0652']],
		'PHPStan\Rules\Functions\CallUserFuncRule' => [['0653']],
		'PHPStan\Rules\Functions\CallCallablesRule' => [['0654']],
		'PHPStan\Rules\Functions\CallToFunctionParametersRule' => [['0655']],
		'PHPStan\Rules\Functions\MissingFunctionReturnTypehintRule' => [['0656']],
		'PHPStan\Rules\Functions\ReturnNullsafeByRefRule' => [['0657']],
		'PHPStan\Rules\Functions\FunctionAttributesRule' => [['0658']],
		'PHPStan\Rules\Functions\ArrayValuesRule' => [['0659']],
		'PHPStan\Rules\Functions\ArrayFilterRule' => [['0660']],
		'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule' => [['0661']],
		'PHPStan\Rules\Functions\FunctionCallableRule' => [['0662']],
		'PHPStan\Rules\Functions\DefineParametersRule' => [['0663']],
		'PHPStan\Rules\Functions\VariadicParametersDeclarationRule' => [['0664']],
		'PHPStan\Rules\Functions\RandomIntParametersRule' => [['0665']],
		'PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule' => [['0666']],
		'PHPStan\Rules\Functions\InnerFunctionRule' => [['0667']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule' => [['0668']],
		'PHPStan\Rules\Functions\ParamAttributesRule' => [['0669']],
		'PHPStan\Rules\Functions\PrintfParametersRule' => [['0670']],
		'PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule' => [['0671']],
		'PHPStan\Rules\Functions\ParameterCastableToStringRule' => [['0672']],
		'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule' => [['0673']],
		'PHPStan\Rules\Functions\InvalidParameterNameRule' => [['0674']],
		'PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule' => [['0675']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule' => [['0676']],
		'PHPStan\Rules\Functions\ImplodeParameterCastableToStringRule' => [['0677']],
		'PHPStan\Rules\Functions\ReturnTypeRule' => [['0678']],
		'PHPStan\Rules\Functions\ArrowFunctionAttributesRule' => [['0679']],
		'PHPStan\Rules\Functions\RedefinedParametersRule' => [['0680']],
		'PHPStan\Rules\Functions\ClosureReturnTypeRule' => [['0681']],
		'PHPStan\Rules\Functions\SortParameterCastableToStringRule' => [['0682']],
		'PHPStan\Rules\Functions\ClosureAttributesRule' => [['0683']],
		'PHPStan\Rules\Functions\FilterVarRule' => [['0684']],
		'PHPStan\Rules\Functions\UnusedClosureUsesRule' => [['0685']],
		'PHPStan\Rules\Functions\CallToFunctionStatementWithNoDiscardRule' => [['0686']],
		'PHPStan\Rules\Functions\MissingFunctionParameterTypehintRule' => [['0687']],
		'PHPStan\Rules\Functions\ReturnTypeAfterFinallyRule' => [['0688']],
		'PHPStan\Rules\Functions\UselessFunctionReturnValueRule' => [['0689']],
		'PHPStan\Rules\Regexp\RegularExpressionPatternRule' => [['0690']],
		'PHPStan\Rules\Regexp\RegularExpressionQuotingRule' => [['0691']],
		'PHPStan\Rules\Names\UsedNamesRule' => [['0692']],
		'PHPStan\Rules\Whitespace\FileWhitespaceRule' => [['0693']],
		'PHPStan\Rules\Generics\MethodSignatureVarianceRule' => [['0694']],
		'PHPStan\Rules\Generics\ClassTemplateTypeRule' => [['0695']],
		'PHPStan\Rules\Generics\TraitTemplateTypeRule' => [['0696']],
		'PHPStan\Rules\Generics\EnumAncestorsRule' => [['0697']],
		'PHPStan\Rules\Generics\FunctionTemplateTypeRule' => [['0698']],
		'PHPStan\Rules\Generics\ClassAncestorsRule' => [['0699']],
		'PHPStan\Rules\Generics\FunctionSignatureVarianceRule' => [['0700']],
		'PHPStan\Rules\Generics\InterfaceAncestorsRule' => [['0701']],
		'PHPStan\Rules\Generics\UsedTraitsRule' => [['0702']],
		'PHPStan\Rules\Generics\MethodTemplateTypeRule' => [['0703']],
		'PHPStan\Rules\Generics\InterfaceTemplateTypeRule' => [['0704']],
		'PHPStan\Rules\Generics\EnumTemplateTypeRule' => [['0705']],
		'PHPStan\Rules\Generics\PropertyVarianceRule' => [['0706']],
		'PHPStan\Rules\Generics\MethodTagTemplateTypeTraitRule' => [['0707']],
		'PHPStan\Rules\Generics\MethodTagTemplateTypeRule' => [['0708']],
		'PHPStan\Rules\Keywords\RequireFileExistsRule' => [['0709']],
		'PHPStan\Rules\Keywords\DeclareStrictTypesRule' => [['0710']],
		'PHPStan\Rules\Keywords\GotoUndefinedLabelRule' => [['0711']],
		'PHPStan\Rules\Keywords\ContinueBreakInLoopRule' => [['0712']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule' => [['0713']],
		'PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule' => [['0714']],
		'PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule' => [['0715']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule' => [['0716']],
		'PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule' => [['0717']],
		'PHPStan\Rules\Comparison\MatchExpressionRule' => [['0718']],
		'PHPStan\Rules\Comparison\FunctionCallConstantConditionRule' => [['0719']],
		'PHPStan\Rules\Comparison\BooleanNotConstantConditionRule' => [['0720']],
		'PHPStan\Rules\Comparison\IfConstantConditionRule' => [['0721']],
		'PHPStan\Rules\Comparison\ConstantLooseComparisonRule' => [['0722']],
		'PHPStan\Rules\Comparison\BooleanAndConstantConditionRule' => [['0723']],
		'PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule' => [['0724']],
		'PHPStan\Rules\Comparison\LogicalXorConstantConditionRule' => [['0725']],
		'PHPStan\Rules\Comparison\ElseIfConstantConditionRule' => [['0726']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule' => [['0727']],
		'PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule' => [['0728']],
		'PHPStan\Rules\Comparison\BooleanOrConstantConditionRule' => [['0729']],
		'PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule' => [['0730']],
		'PHPStan\Rules\Comparison\ConstantConditionInTraitRule' => [['0731']],
		'PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule' => [['0732']],
		'PHPStan\Rules\Types\InvalidTypesInUnionRule' => [['0733']],
		'PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule' => [['0734']],
		'PHPStan\Rules\PhpDoc\FunctionAssertRule' => [['0735']],
		'PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule' => [['0736']],
		'PHPStan\Rules\PhpDoc\SealedDefinitionTraitRule' => [['0737']],
		'PHPStan\Rules\PhpDoc\IncompatiblePropertyHookPhpDocTypeRule' => [['0738']],
		'PHPStan\Rules\PhpDoc\MethodAssertRule' => [['0739']],
		'PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule' => [['0740']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule' => [['0741']],
		'PHPStan\Rules\PhpDoc\SealedDefinitionClassRule' => [['0742']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule' => [['0743']],
		'PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule' => [['0744']],
		'PHPStan\Rules\PhpDoc\RequireExtendsDefinitionTraitRule' => [['0745']],
		'PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule' => [['0746']],
		'PHPStan\Rules\PhpDoc\IncompatibleParamImmediatelyInvokedCallableRule' => [['0747']],
		'PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule' => [['0748']],
		'PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule' => [['0749']],
		'PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule' => [['0750']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule' => [['0751']],
		'PHPStan\Rules\PhpDoc\RequireImplementsDefinitionClassRule' => [['0752']],
		'PHPStan\Rules\PhpDoc\RequireImplementsDefinitionTraitRule' => [['0753']],
		'PHPStan\Rules\PhpDoc\RequireExtendsDefinitionClassRule' => [['0754']],
		'PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule' => [['0755']],
		'PHPStan\Rules\Properties\PropertyAttributesRule' => [['0756']],
		'PHPStan\Rules\Properties\InvalidCallablePropertyTypeRule' => [['0757']],
		'PHPStan\Rules\Properties\SetNonVirtualPropertyHookAssignRule' => [['0758']],
		'PHPStan\Rules\Properties\PropertiesInInterfaceRule' => [['0759']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule' => [['0760']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyRule' => [['0761']],
		'PHPStan\Rules\Properties\PropertyHookAttributesRule' => [['0762']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertyHookTypehintsRule' => [['0763']],
		'PHPStan\Rules\Properties\NullsafePropertyFetchRule' => [['0764']],
		'PHPStan\Rules\Properties\PropertyAssignRefRule' => [['0765']],
		'PHPStan\Rules\Properties\GetNonVirtualPropertyHookReadRule' => [['0766']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertiesRule' => [['0767']],
		'PHPStan\Rules\Properties\PropertyInClassRule' => [['0768']],
		'PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule' => [['0769']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesRule' => [['0770']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule' => [['0771']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule' => [['0772']],
		'PHPStan\Rules\Properties\AccessPropertiesRule' => [['0773']],
		'PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule' => [['0774']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule' => [['0775']],
		'PHPStan\Rules\Properties\OverridingPropertyRule' => [['0776']],
		'PHPStan\Rules\Properties\AccessPropertiesInAssignRule' => [['0777']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule' => [['0778']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule' => [['0779']],
		'PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule' => [['0780']],
		'PHPStan\Rules\Properties\MissingPropertyTypehintRule' => [['0781']],
		'PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule' => [['0782']],
		'PHPStan\Rules\Properties\TypesAssignedToPropertiesRule' => [['0783']],
		'PHPStan\Rules\Properties\SetPropertyHookParameterRule' => [['0784']],
		'PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule' => [['0785']],
		'PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule' => [['0786']],
		'PHPStan\Rules\Generators\YieldInGeneratorRule' => [['0787']],
		'PHPStan\Rules\Generators\YieldFromTypeRule' => [['0788']],
		'PHPStan\Rules\Generators\YieldTypeRule' => [['0789']],
		'PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule' => [['0790']],
		'PHPStan\Rules\Cast\DeprecatedCastRule' => [['0791']],
		'PHPStan\Rules\Cast\VoidCastRule' => [['0792']],
		'PHPStan\Rules\Cast\UnsetCastRule' => [['0793']],
		'PHPStan\Rules\Cast\EchoRule' => [['0794']],
		'PHPStan\Rules\Cast\InvalidCastRule' => [['0795']],
		'PHPStan\Rules\Cast\PrintRule' => [['0796']],
		'PHPStan\Rules\Methods\AbstractPrivateMethodRule' => [['0797']],
		'PHPStan\Rules\Methods\ConsistentConstructorDeclarationRule' => [['0798']],
		'PHPStan\Rules\Methods\CallToMethodStatementWithNoDiscardRule' => [['0799']],
		'PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule' => [['0800']],
		'PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule' => [['0801']],
		'PHPStan\Rules\Methods\ConsistentConstructorRule' => [['0802']],
		'PHPStan\Rules\Methods\MissingMethodReturnTypehintRule' => [['0803']],
		'PHPStan\Rules\Methods\StaticMethodCallableRule' => [['0804']],
		'PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule' => [['0805']],
		'PHPStan\Rules\Methods\MethodVisibilityInInterfaceRule' => [['0806']],
		'PHPStan\Rules\Methods\MissingMethodParameterTypehintRule' => [['0807']],
		'PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule' => [['0808']],
		'PHPStan\Rules\Methods\MethodAttributesRule' => [['0809']],
		'PHPStan\Rules\Methods\CallStaticMethodsRule' => [['0810']],
		'PHPStan\Rules\Methods\OverridingMethodRule' => [['0811']],
		'PHPStan\Rules\Methods\ConstructorReturnTypeRule' => [['0812']],
		'PHPStan\Rules\Methods\CallToStaticMethodStatementWithNoDiscardRule' => [['0813']],
		'PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule' => [['0814']],
		'PHPStan\Rules\Methods\NullsafeMethodCallRule' => [['0815']],
		'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule' => [['0816']],
		'PHPStan\Rules\Methods\MethodCallableRule' => [['0817']],
		'PHPStan\Rules\Methods\MissingMethodImplementationRule' => [['0818']],
		'PHPStan\Rules\Methods\MethodCallWithPossiblyRenamedNamedArgumentRule' => [['0819']],
		'PHPStan\Rules\Methods\CallMethodsRule' => [['0820']],
		'PHPStan\Rules\Methods\ReturnTypeRule' => [['0821']],
		'PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule' => [['0822']],
		'PHPStan\Rules\Methods\FinalPrivateMethodRule' => [['0823']],
		'PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule' => [['0824']],
		'PHPStan\Rules\Methods\MissingMethodSelfOutTypeRule' => [['0825']],
		'PHPStan\Rules\EnumCases\EnumCaseAttributesRule' => [['0826']],
		'PHPStan\Rules\EnumCases\EnumCaseOutsideEnumRule' => [['0827']],
		'PHPStan\Rules\Api\ApiClassConstFetchRule' => [['0828']],
		'PHPStan\Rules\Api\ApiTraitUseRule' => [['0829']],
		'PHPStan\Rules\Api\ApiClassImplementsRule' => [['0830']],
		'PHPStan\Rules\Api\ApiClassExtendsRule' => [['0831']],
		'PHPStan\Rules\Api\ApiInstantiationRule' => [['0832']],
		'PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule' => [['0833']],
		'PHPStan\Rules\Api\ApiInterfaceExtendsRule' => [['0834']],
		'PHPStan\Rules\Api\RuntimeReflectionInstantiationRule' => [['0835']],
		'PHPStan\Rules\Api\GetTemplateTypeRule' => [['0836']],
		'PHPStan\Rules\Api\ApiStaticCallRule' => [['0837']],
		'PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule' => [['0838']],
		'PHPStan\Rules\Api\ApiInstanceofRule' => [['0839']],
		'PHPStan\Rules\Api\ApiMethodCallRule' => [['0840']],
		'PHPStan\Rules\Api\RuntimeReflectionFunctionRule' => [['0841']],
		'PHPStan\Rules\Api\ApiInstanceofTypeRule' => [['0842']],
		'PHPStan\Rules\Api\OldPhpParser4ClassRule' => [['0843']],
		'PHPStan\Rules\Exceptions\ThrowExprTypeRule' => [['0844']],
		'PHPStan\Rules\Exceptions\ThrowExpressionRule' => [['0845']],
		'PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule' => [['0846']],
		'PHPStan\Rules\Exceptions\ThrowsVoidPropertyHookWithExplicitThrowPointRule' => [['0847']],
		'PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule' => [['0848']],
		'PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule' => [['0849']],
		'PHPStan\Rules\Exceptions\NoncapturingCatchRule' => [['0850']],
		'PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule' => [['0851']],
		'PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule' => [['0852']],
		'PHPStan\Rules\Missing\MissingReturnRule' => [['0853']],
		'PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule' => [['0854']],
		'PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule' => [['0855']],
		'PHPStan\Rules\TooWideTypehints\TooWideFunctionParameterOutTypeRule' => [['0856']],
		'PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule' => [['0857']],
		'PHPStan\Rules\TooWideTypehints\TooWideMethodParameterOutTypeRule' => [['0858']],
		'PHPStan\Rules\TooWideTypehints\TooWidePropertyTypeRule' => [['0859']],
		'PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule' => [['0860']],
		'PHPStan\Collectors\Collector' => [1 => ['0861', '0862', '0863', '0864', '0865', '0866', '0867', '0868', '0869']],
		'PHPStan\Rules\Traits\TraitDeclarationCollector' => [['0861']],
		'PHPStan\Rules\Traits\TraitUseCollector' => [['0862']],
		'PHPStan\Rules\DeadCode\ConstructorWithoutImpurePointsCollector' => [['0863']],
		'PHPStan\Rules\DeadCode\PossiblyPureNewCollector' => [['0864']],
		'PHPStan\Rules\DeadCode\PossiblyPureFuncCallCollector' => [['0865']],
		'PHPStan\Rules\DeadCode\PossiblyPureStaticCallCollector' => [['0866']],
		'PHPStan\Rules\DeadCode\PossiblyPureMethodCallCollector' => [['0867']],
		'PHPStan\Rules\DeadCode\MethodWithoutImpurePointsCollector' => [['0868']],
		'PHPStan\Rules\DeadCode\FunctionWithoutImpurePointsCollector' => [['0869']],
		'PHPStan\DependencyInjection\ExtensionsCollection' => [
			2 => [
				'phpstan.extensionsCollection.PhpParser.NodeVisitor',
				'phpstan.extensionsCollection.PHPStan.Classes.ForbiddenClassNameExtension',
				'phpstan.extensionsCollection.PHPStan.Collectors.Collector',
				'phpstan.extensionsCollection.PHPStan.Diagnose.DiagnoseExtension',
				'phpstan.extensionsCollection.PHPStan.Type.StaticMethodParameterOutTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.MethodParameterClosureTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.DynamicFunctionReturnTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.OperatorTypeSpecifyingExtension',
				'phpstan.extensionsCollection.PHPStan.Type.MethodParameterClosureThisExtension',
				'phpstan.extensionsCollection.PHPStan.Type.MethodParameterOutTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.StaticMethodParameterClosureTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.DynamicStaticMethodThrowTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.DynamicStaticMethodReturnTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.DynamicMethodReturnTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.ExpressionTypeResolverExtension',
				'phpstan.extensionsCollection.PHPStan.Type.StaticMethodTypeSpecifyingExtension',
				'phpstan.extensionsCollection.PHPStan.Type.FunctionParameterClosureThisExtension',
				'phpstan.extensionsCollection.PHPStan.Type.MethodTypeSpecifyingExtension',
				'phpstan.extensionsCollection.PHPStan.Type.UnaryOperatorTypeSpecifyingExtension',
				'phpstan.extensionsCollection.PHPStan.Type.FunctionParameterClosureTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.FunctionParameterOutTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.DynamicMethodThrowTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.FunctionTypeSpecifyingExtension',
				'phpstan.extensionsCollection.PHPStan.Type.StaticMethodParameterClosureThisExtension',
				'phpstan.extensionsCollection.PHPStan.Type.DynamicFunctionThrowTypeExtension',
				'phpstan.extensionsCollection.PHPStan.PhpDoc.TypeNodeResolverExtension',
				'phpstan.extensionsCollection.PHPStan.PhpDoc.StubFilesExtension',
				'phpstan.extensionsCollection.PHPStan.Analyser.StmtHandler',
				'phpstan.extensionsCollection.PHPStan.Analyser.ExprHandler',
				'phpstan.extensionsCollection.PHPStan.Analyser.PerFileAnalysisResettable',
				'phpstan.extensionsCollection.PHPStan.Analyser.IgnoreErrorExtension',
				'phpstan.extensionsCollection.PHPStan.Analyser.ResultCache.ResultCacheMetaExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.Rule',
				'phpstan.extensionsCollection.PHPStan.Rules.Constants.AlwaysUsedClassConstantsExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedFunctionUsageExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedClassNameUsageExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedMethodUsageExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedClassConstantUsageExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedPropertyUsageExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.Properties.ReadWritePropertiesExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.Methods.AlwaysUsedMethodExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.ConstantDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.EnumCaseDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.FunctionDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.ClassDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.MethodDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.PropertyDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.ClassConstantDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.PropertiesClassReflectionExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.MethodsClassReflectionExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.AllowedSubTypesClassReflectionExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.AdditionalConstructorsExtension',
			],
		],
		'PHPStan\DependencyInjection\LazyExtensionsCollection' => [
			2 => [
				'phpstan.extensionsCollection.PhpParser.NodeVisitor',
				'phpstan.extensionsCollection.PHPStan.Classes.ForbiddenClassNameExtension',
				'phpstan.extensionsCollection.PHPStan.Collectors.Collector',
				'phpstan.extensionsCollection.PHPStan.Diagnose.DiagnoseExtension',
				'phpstan.extensionsCollection.PHPStan.Type.StaticMethodParameterOutTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.MethodParameterClosureTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.DynamicFunctionReturnTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.OperatorTypeSpecifyingExtension',
				'phpstan.extensionsCollection.PHPStan.Type.MethodParameterClosureThisExtension',
				'phpstan.extensionsCollection.PHPStan.Type.MethodParameterOutTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.StaticMethodParameterClosureTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.DynamicStaticMethodThrowTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.DynamicStaticMethodReturnTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.DynamicMethodReturnTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.ExpressionTypeResolverExtension',
				'phpstan.extensionsCollection.PHPStan.Type.StaticMethodTypeSpecifyingExtension',
				'phpstan.extensionsCollection.PHPStan.Type.FunctionParameterClosureThisExtension',
				'phpstan.extensionsCollection.PHPStan.Type.MethodTypeSpecifyingExtension',
				'phpstan.extensionsCollection.PHPStan.Type.UnaryOperatorTypeSpecifyingExtension',
				'phpstan.extensionsCollection.PHPStan.Type.FunctionParameterClosureTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.FunctionParameterOutTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.DynamicMethodThrowTypeExtension',
				'phpstan.extensionsCollection.PHPStan.Type.FunctionTypeSpecifyingExtension',
				'phpstan.extensionsCollection.PHPStan.Type.StaticMethodParameterClosureThisExtension',
				'phpstan.extensionsCollection.PHPStan.Type.DynamicFunctionThrowTypeExtension',
				'phpstan.extensionsCollection.PHPStan.PhpDoc.TypeNodeResolverExtension',
				'phpstan.extensionsCollection.PHPStan.PhpDoc.StubFilesExtension',
				'phpstan.extensionsCollection.PHPStan.Analyser.StmtHandler',
				'phpstan.extensionsCollection.PHPStan.Analyser.ExprHandler',
				'phpstan.extensionsCollection.PHPStan.Analyser.PerFileAnalysisResettable',
				'phpstan.extensionsCollection.PHPStan.Analyser.IgnoreErrorExtension',
				'phpstan.extensionsCollection.PHPStan.Analyser.ResultCache.ResultCacheMetaExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.Rule',
				'phpstan.extensionsCollection.PHPStan.Rules.Constants.AlwaysUsedClassConstantsExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedFunctionUsageExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedClassNameUsageExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedMethodUsageExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedClassConstantUsageExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedPropertyUsageExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.Properties.ReadWritePropertiesExtension',
				'phpstan.extensionsCollection.PHPStan.Rules.Methods.AlwaysUsedMethodExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.ConstantDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.EnumCaseDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.FunctionDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.ClassDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.MethodDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.PropertyDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.ClassConstantDeprecationExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.PropertiesClassReflectionExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.MethodsClassReflectionExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.AllowedSubTypesClassReflectionExtension',
				'phpstan.extensionsCollection.PHPStan.Reflection.AdditionalConstructorsExtension',
			],
		],
		'PhpParser\BuilderFactory' => [['0870']],
		'PhpParser\NodeVisitor\NameResolver' => [['0871']],
		'PHPStan\PhpDocParser\ParserConfig' => [['0872']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['0873']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['0874']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['0875']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['0876']],
		'PHPStan\PhpDocParser\Printer\Printer' => [['0877']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [1 => ['0878', '0879']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [['0878']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0879']],
		'PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension' => [['0880', '0881', '0882', '0883', '0884']],
		'PHPStan\Type\Php\DateTimeModifyReturnTypeExtension' => [['0885', '0886']],
		'PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension' => [['0887', '0888']],
		'PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension' => [
			['0889', '0890'],
		],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\File\FileExcluder' => [2 => ['fileExcluderAnalyse', 'fileExcluderScan']],
		'PHPStan\File\FileFinder' => [2 => ['fileFinderAnalyse', 'fileFinderScan']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\BetterReflection\SourceLocator\Type\SourceLocator' => [2 => ['betterReflectionSourceLocator']],
		'PHPStan\Parser\Parser' => [
			2 => [
				'php8Parser',
				'currentPhpVersionSimpleDirectParser',
				'currentPhpVersionSimpleParser',
				'currentPhpVersionRichParser',
				'pathRoutingParser',
				'defaultAnalysisParser',
				'freshStubParser',
				'stubParser',
			],
		],
		'PHPStan\Parser\SimpleParser' => [2 => ['php8Parser', 'currentPhpVersionSimpleDirectParser']],
		'PhpParser\Lexer' => [2 => ['php8Lexer', 'currentPhpVersionLexer']],
		'PhpParser\Lexer\Emulative' => [2 => ['php8Lexer']],
		'PhpParser\ParserAbstract' => [2 => ['php8PhpParser', 'currentPhpVersionPhpParser']],
		'PhpParser\Parser' => [2 => ['php8PhpParser', 'currentPhpVersionPhpParser', 'phpParserDecorator']],
		'PhpParser\Parser\Php8' => [2 => ['php8PhpParser']],
		'PHPStan\Parser\PhpParserFactory' => [2 => ['currentPhpVersionPhpParserFactory']],
		'PHPStan\Parser\CleaningParser' => [2 => ['currentPhpVersionSimpleParser']],
		'PHPStan\Parser\RichParser' => [2 => ['currentPhpVersionRichParser']],
		'PHPStan\Parser\PathRoutingParser' => [2 => ['pathRoutingParser']],
		'PHPStan\Parser\PhpParserDecorator' => [2 => ['phpParserDecorator']],
		'PHPStan\Parser\CachedParser' => [2 => ['defaultAnalysisParser', 'stubParser']],
		'PHPStan\Parser\StubParser' => [2 => ['freshStubParser']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule' => [['0891']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule' => [['0892']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule' => [['0893']],
		'PHPStan\Rules\Properties\UninitializedPropertyRule' => [['0894']],
		'PHPStan\Rules\Exceptions\MethodThrowTypeCovarianceRule' => [['0895']],
		'PHPStan\Rules\Classes\NewStaticInAbstractClassStaticMethodRule' => [['0896']],
		'PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageExtension' => [['0897']],
		'PHPStan\Rules\InternalTag\RestrictedInternalClassConstantUsageExtension' => [['0897']],
		'PHPStan\Rules\RestrictedUsage\RestrictedClassNameUsageExtension' => [['0898']],
		'PHPStan\Rules\InternalTag\RestrictedInternalClassNameUsageExtension' => [['0898']],
		'PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageExtension' => [['0899']],
		'PHPStan\Rules\InternalTag\RestrictedInternalFunctionUsageExtension' => [['0899']],
		'PHPStan\Rules\Variables\AssignToByRefExprFromForeachRule' => [['0900']],
		'PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageExtension' => [['0901']],
		'PHPStan\Rules\InternalTag\RestrictedInternalPropertyUsageExtension' => [['0901']],
		'PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageExtension' => [['0902']],
		'PHPStan\Rules\InternalTag\RestrictedInternalMethodUsageExtension' => [['0902']],
		'PHPStan\Rules\Constants\ValueAssignedToDefineRule' => [['0903']],
		'PHPStan\Rules\Constants\ValueAssignedToGlobalConstantRule' => [['0904']],
		'PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule' => [['0905']],
		'PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule' => [['0906']],
		'PHPStan\Rules\Exceptions\TooWidePropertyHookThrowTypeRule' => [['0907']],
		'PHPStan\Rules\Keywords\UnusedLabelRule' => [['0908']],
		'PHPStan\Rules\Comparison\ImpossibleInArrayHaystackFiniteTypesRule' => [['0909']],
		'PHPStan\Rules\Comparison\SwitchConditionRule' => [['0910']],
		'PHPStan\Rules\Functions\ParameterCastableToNumberRule' => [['0911']],
		'PHPStan\Rules\Functions\PrintfParameterTypeRule' => [['0912']],
		'PHPStan\Rules\DateIntervalInstantiationRule' => [['0913']],
		'PHPStan\Rules\Functions\SortWithoutEffectRule' => [['0914']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): PHPStan\Process\SystemResources
	{
		return new PHPStan\Process\SystemResources;
	}


	public function createService02(): PHPStan\Process\CpuCoreCounter
	{
		return new PHPStan\Process\CpuCoreCounter($this->getParameter('parallel')['loadLimit'], $this->getService('01'));
	}


	public function createService03(): PHPStan\Fixable\PhpDoc\PhpDocEditor
	{
		return new PHPStan\Fixable\PhpDoc\PhpDocEditor($this->getService('0877'), $this->getService('0873'), $this->getService('0876'));
	}


	public function createService04(): PHPStan\Fixable\Patcher
	{
		return new PHPStan\Fixable\Patcher;
	}


	public function createService05(): PHPStan\Collectors\RegistryFactory
	{
		return new PHPStan\Collectors\RegistryFactory($this->getService('phpstan.extensionsCollection.PHPStan.Collectors.Collector'));
	}


	public function createService06(): PHPStan\Collectors\Registry
	{
		return $this->getService('05')->create();
	}


	public function createService07(): PHPStan\Dependency\ExportedNodeFetcher
	{
		return new PHPStan\Dependency\ExportedNodeFetcher($this->getService('defaultAnalysisParser'), $this->getService('010'));
	}


	public function createService08(): PHPStan\Dependency\ExportedNodeResolver
	{
		return new PHPStan\Dependency\ExportedNodeResolver($this->getService('reflectionProvider'), $this->getService('0237'));
	}


	public function createService09(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver(
			$this->getService('0408'),
			$this->getService('0409'),
			$this->getService('reflectionProvider'),
			$this->getService('08'),
			$this->getService('026')
		);
	}


	public function createService010(): PHPStan\Dependency\ExportedNodeVisitor
	{
		return new PHPStan\Dependency\ExportedNodeVisitor($this->getService('08'));
	}


	public function createService011(): PHPStan\Dependency\PackageDependencyResolver
	{
		return new PHPStan\Dependency\PackageDependencyResolver(
			$this->getParameter('composerAutoloaderProjectPaths'),
			$this->getService('0408')
		);
	}


	public function createService012(): PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter(
			$this->getService('errorFormatter.github'),
			$this->getService('errorFormatter.teamcity')
		);
	}


	public function createService013(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('015'),
			$this->getService('014'),
			$this->getService('0403'),
			$this->getService('0273'),
			$this->getService('0541'),
			$this->getService('0284'),
			$this->getService('0266')
		);
	}


	public function createService014(): PHPStan\Command\AnalyserRunner
	{
		return new PHPStan\Command\AnalyserRunner(
			$this->getService('0495'),
			$this->getService('0326'),
			$this->getService('0494'),
			$this->getService('02'),
			$this->getService('015')
		);
	}


	public function createService015(): PHPStan\Command\BootstrapFilesRunner
	{
		return new PHPStan\Command\BootstrapFilesRunner($this->getService('0406'));
	}


	public function createService016(): PHPStan\Command\FixerWorkerRunner
	{
		return new PHPStan\Command\FixerWorkerRunner(
			$this->getService('0284'),
			$this->getService('0541'),
			$this->getService('0403'),
			$this->getService('0494'),
			$this->getService('0495'),
			$this->getService('02')
		);
	}


	public function createService017(): PHPStan\Command\FixerApplication
	{
		return new PHPStan\Command\FixerApplication(
			$this->getService('0412'),
			$this->getService('0284'),
			$this->getService('0266'),
			$this->getParameter('analysedPaths'),
			$this->getParameter('currentWorkingDirectory'),
			$this->getParameter('pro')['tmpDir'],
			$this->getParameter('composerAutoloaderProjectPaths'),
			$this->getParameter('allConfigFiles'),
			$this->getParameter('cliAutoloadFile'),
			$this->getParameter('bootstrapFiles'),
			$this->getParameter('editorUrl'),
			$this->getParameter('usedLevel'),
			$this->getService('0414'),
			$this->getService('0496'),
			$this->getService('016')
		);
	}


	public function createService018(): PHPStan\Diagnose\SystemResourcesDiagnoseExtension
	{
		return new PHPStan\Diagnose\SystemResourcesDiagnoseExtension(
			$this->getService('02'),
			$this->getService('01'),
			$this->getParameter('parallel')['loadLimit']
		);
	}


	public function createService019(): PHPStan\Turbo\TurboDiagnoseExtension
	{
		return new PHPStan\Turbo\TurboDiagnoseExtension;
	}


	public function createService020(): PHPStan\Type\BitwiseFlagHelper
	{
		return new PHPStan\Type\BitwiseFlagHelper($this->getService('reflectionProvider'));
	}


	public function createService021(): PHPStan\Type\LazyTypeAliasResolverProvider
	{
		return new PHPStan\Type\LazyTypeAliasResolverProvider($this->getService('0406'));
	}


	public function createService022(): PHPStan\Type\Constant\OversizedArrayBuilder
	{
		return new PHPStan\Type\Constant\OversizedArrayBuilder;
	}


	public function createService023(): PHPStan\Type\UsefulTypeAliasResolver
	{
		return new PHPStan\Type\UsefulTypeAliasResolver(
			$this->getParameter('typeAliases'),
			$this->getService('0269'),
			$this->getService('0275'),
			$this->getService('reflectionProvider'),
			$this->getParameter('cache')['resolvedLocalTypeAliasesCountMax']
		);
	}


	public function createService024(): PHPStan\Type\PHPStan\ClassNameUsageLocationCreateIdentifierDynamicReturnTypeExtension
	{
		return new PHPStan\Type\PHPStan\ClassNameUsageLocationCreateIdentifierDynamicReturnTypeExtension;
	}


	public function createService025(): PHPStan\Type\ClosureTypeFactory
	{
		return new PHPStan\Type\ClosureTypeFactory(
			$this->getService('0538'),
			$this->getService('0879'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0518'),
			$this->getService('currentPhpVersionPhpParser')
		);
	}


	public function createService026(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('0518'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('0272'),
			$this->getService('0263'),
			$this->getService('0492'),
			$this->getService('0408'),
			$this->getService('0491'),
			$this->getService('0413'),
			$this->getParameter('cache')['resolvedPhpDocBlockCacheCountMax'],
			$this->getParameter('cache')['nameScopeMapMemoryCacheCountMax']
		);
	}


	public function createService027(): PHPStan\Type\UnaryOperatorTypeSpecifyingExtensionRegistry
	{
		return new PHPStan\Type\UnaryOperatorTypeSpecifyingExtensionRegistry($this->getService('phpstan.extensionsCollection.PHPStan.Type.UnaryOperatorTypeSpecifyingExtension'));
	}


	public function createService028(): PHPStan\Type\DynamicReturnTypeExtensionRegistry
	{
		return new PHPStan\Type\DynamicReturnTypeExtensionRegistry(
			$this->getService('reflectionProvider'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.DynamicMethodReturnTypeExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.DynamicStaticMethodReturnTypeExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.DynamicFunctionReturnTypeExtension')
		);
	}


	public function createService029(): PHPStan\Type\ArrayUnpackingHelper
	{
		return new PHPStan\Type\ArrayUnpackingHelper($this->getService('0499'));
	}


	public function createService030(): PHPStan\Type\Regex\RegexGroupParser
	{
		return new PHPStan\Type\Regex\RegexGroupParser($this->getService('0499'), $this->getService('031'));
	}


	public function createService031(): PHPStan\Type\Regex\RegexExpressionHelper
	{
		return new PHPStan\Type\Regex\RegexExpressionHelper($this->getService('0538'));
	}


	public function createService032(): PHPStan\Type\Php\DateIntervalFormatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalFormatDynamicReturnTypeExtension($this->getService('079'));
	}


	public function createService033(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension($this->getService('reflectionProvider'));
	}


	public function createService034(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService035(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService036(): PHPStan\Type\Php\PregMatchTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PregMatchTypeSpecifyingExtension($this->getService('0124'));
	}


	public function createService037(): PHPStan\Type\Php\OpenSslCipherMethodsProvider
	{
		return new PHPStan\Type\Php\OpenSslCipherMethodsProvider;
	}


	public function createService038(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
	}


	public function createService039(): PHPStan\Type\Php\DomDocumentCreateElementDynamicThrowTypeExtension
	{
		return new PHPStan\Type\Php\DomDocumentCreateElementDynamicThrowTypeExtension;
	}


	public function createService040(): PHPStan\Type\Php\BcMathNumberUnaryOperatorTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\BcMathNumberUnaryOperatorTypeSpecifyingExtension($this->getService('0499'));
	}


	public function createService041(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('090'));
	}


	public function createService042(): PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension;
	}


	public function createService043(): PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension($this->getService('0499'));
	}


	public function createService044(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService045(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension;
	}


	public function createService046(): PHPStan\Type\Php\IdateFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\IdateFunctionReturnTypeHelper;
	}


	public function createService047(): PHPStan\Type\Php\ArrayColumnHelper
	{
		return new PHPStan\Type\Php\ArrayColumnHelper($this->getService('0499'));
	}


	public function createService048(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService049(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService050(): PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension
	{
		return new PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension($this->getService('0124'));
	}


	public function createService051(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService052(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService053(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService054(): PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension;
	}


	public function createService055(): PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension;
	}


	public function createService056(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension($this->getService('0499'));
	}


	public function createService057(): PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension;
	}


	public function createService058(): PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension;
	}


	public function createService059(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService060(): PHPStan\Type\Php\RoundFunctionThrowTypeExtension
	{
		return new PHPStan\Type\Php\RoundFunctionThrowTypeExtension($this->getService('0499'));
	}


	public function createService061(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService062(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension($this->getService('0499'));
	}


	public function createService063(): PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension;
	}


	public function createService064(): PHPStan\Type\Php\MinMaxFunctionThrowTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionThrowTypeExtension($this->getService('0499'));
	}


	public function createService065(): PHPStan\Type\Php\FilterFunctionsThrowTypeExtension
	{
		return new PHPStan\Type\Php\FilterFunctionsThrowTypeExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0499'),
			$this->getService('0126'),
			$this->getService('0127')
		);
	}


	public function createService066(): PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension($this->getService('0126'));
	}


	public function createService067(): PHPStan\Type\Php\PregMatchParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\PregMatchParameterOutTypeExtension($this->getService('0124'));
	}


	public function createService068(): PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension;
	}


	public function createService069(): PHPStan\Type\Php\OpensslCipherFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\OpensslCipherFunctionsReturnTypeExtension($this->getService('0499'), $this->getService('037'));
	}


	public function createService070(): PHPStan\Type\Php\PDOConnectReturnTypeExtension
	{
		return new PHPStan\Type\Php\PDOConnectReturnTypeExtension($this->getService('0499'));
	}


	public function createService071(): PHPStan\Type\Php\DomDocumentCreateElementDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DomDocumentCreateElementDynamicReturnTypeExtension;
	}


	public function createService072(): PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService073(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			$this->getService('020')
		);
	}


	public function createService074(): PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension($this->getService('0499'));
	}


	public function createService075(): PHPStan\Type\Php\CompactFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CompactFunctionReturnTypeExtension($this->getParameter('checkMaybeUndefinedVariables'));
	}


	public function createService076(): PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension($this->getService('037'));
	}


	public function createService077(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService078(): PHPStan\Type\Php\ArrayCombineHelper
	{
		return new PHPStan\Type\Php\ArrayCombineHelper;
	}


	public function createService079(): PHPStan\Type\Php\DateIntervalFormatReturnTypeHelper
	{
		return new PHPStan\Type\Php\DateIntervalFormatReturnTypeHelper;
	}


	public function createService080(): PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension($this->getService('0499'));
	}


	public function createService081(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension($this->getService('0170'));
	}


	public function createService082(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService083(): PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension($this->getService('047'));
	}


	public function createService084(): PHPStan\Type\Php\VersionCompareFunctionDynamicThrowTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicThrowTypeExtension($this->getService('0499'));
	}


	public function createService085(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService086(): PHPStan\Type\Php\ArrayWalkParameterClosureTypeExtension
	{
		return new PHPStan\Type\Php\ArrayWalkParameterClosureTypeExtension;
	}


	public function createService087(): PHPStan\Type\Php\StrContainingTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\StrContainingTypeSpecifyingExtension;
	}


	public function createService088(): PHPStan\Type\Php\ConstantFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ConstantFunctionReturnTypeExtension($this->getService('0173'));
	}


	public function createService089(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension(
			$this->getService('0500'),
			$this->getService('0499')
		);
	}


	public function createService090(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService091(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension($this->getService('0499'));
	}


	public function createService092(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService093(): PHPStan\Type\Php\OutputBufferingDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\OutputBufferingDynamicReturnTypeExtension;
	}


	public function createService094(): PHPStan\Type\Php\GetClassFunctionThrowTypeExtension
	{
		return new PHPStan\Type\Php\GetClassFunctionThrowTypeExtension($this->getService('0499'));
	}


	public function createService095(): PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension;
	}


	public function createService096(): PHPStan\Type\Php\SubstrDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SubstrDynamicReturnTypeExtension($this->getService('0499'));
	}


	public function createService097(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService098(): PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService099(): PHPStan\Type\Php\IntdivThrowTypeExtension
	{
		return new PHPStan\Type\Php\IntdivThrowTypeExtension;
	}


	public function createService0100(): PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension($this->getService('0499'));
	}


	public function createService0101(): PHPStan\Type\Php\LtrimFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\LtrimFunctionReturnTypeExtension;
	}


	public function createService0102(): PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension;
	}


	public function createService0103(): PHPStan\Type\Php\StrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrlenFunctionReturnTypeExtension;
	}


	public function createService0104(): PHPStan\Type\Php\ArrayMapParameterClosureTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapParameterClosureTypeExtension;
	}


	public function createService0105(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('0126'));
	}


	public function createService0106(): PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension;
	}


	public function createService0107(): PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0108(): PHPStan\Type\Php\ArrayFirstLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFirstLastDynamicReturnTypeExtension;
	}


	public function createService0109(): PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension;
	}


	public function createService0110(): PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension;
	}


	public function createService0111(): PHPStan\Type\Php\StrShuffleFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrShuffleFunctionReturnTypeExtension;
	}


	public function createService0112(): PHPStan\Type\Php\ArrayPadDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPadDynamicReturnTypeExtension;
	}


	public function createService0113(): PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0114(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0115(): PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension($this->getService('0499'));
	}


	public function createService0116(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0117(): PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension;
	}


	public function createService0118(): PHPStan\Type\Php\DateIntervalCreateFromDateStringThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalCreateFromDateStringThrowTypeExtension($this->getService('0499'));
	}


	public function createService0119(): PHPStan\Type\Php\StrTokFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrTokFunctionReturnTypeExtension;
	}


	public function createService0120(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0121(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0122(): PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension;
	}


	public function createService0123(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0124(): PHPStan\Type\Php\RegexArrayShapeMatcher
	{
		return new PHPStan\Type\Php\RegexArrayShapeMatcher(
			$this->getService('030'),
			$this->getService('031'),
			$this->getService('0499')
		);
	}


	public function createService0125(): PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension($this->getService('0499'));
	}


	public function createService0126(): PHPStan\Type\Php\FilterFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\FilterFunctionReturnTypeHelper($this->getService('reflectionProvider'), $this->getService('0499'));
	}


	public function createService0127(): PHPStan\Type\Php\FilterFunctionFlagsHelper
	{
		return new PHPStan\Type\Php\FilterFunctionFlagsHelper;
	}


	public function createService0128(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0129(): PHPStan\Type\Php\StrrevFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrrevFunctionReturnTypeExtension;
	}


	public function createService0130(): PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension;
	}


	public function createService0131(): PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension($this->getService('0499'));
	}


	public function createService0132(): PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension;
	}


	public function createService0133(): PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension($this->getService('0499'));
	}


	public function createService0134(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0135(): PHPStan\Type\Php\JsonThrowTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowTypeExtension($this->getService('reflectionProvider'), $this->getService('020'));
	}


	public function createService0136(): PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension;
	}


	public function createService0137(): PHPStan\Type\Php\PrintfFormatParser
	{
		return new PHPStan\Type\Php\PrintfFormatParser($this->getService('0499'));
	}


	public function createService0138(): PHPStan\Type\Php\DateFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeHelper;
	}


	public function createService0139(): PHPStan\Type\Php\PgDmlDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PgDmlDynamicReturnTypeExtension($this->getService('020'));
	}


	public function createService0140(): PHPStan\Type\Php\DateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeExtension($this->getService('0138'));
	}


	public function createService0141(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0142(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension($this->getService('0499'));
	}


	public function createService0143(): PHPStan\Type\Php\ParseStrParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\ParseStrParameterOutTypeExtension;
	}


	public function createService0144(): PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension;
	}


	public function createService0145(): PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension($this->getService('020'));
	}


	public function createService0146(): PHPStan\Type\Php\HashFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashFunctionsReturnTypeExtension($this->getService('0499'));
	}


	public function createService0147(): PHPStan\Type\Php\IdateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IdateFunctionReturnTypeExtension($this->getService('046'));
	}


	public function createService0148(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService0149(): PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension;
	}


	public function createService0150(): PHPStan\Type\Php\ArrayCountValuesDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCountValuesDynamicReturnTypeExtension;
	}


	public function createService0151(): PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension;
	}


	public function createService0152(): PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension;
	}


	public function createService0153(): PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension($this->getService('078'), $this->getService('0499'));
	}


	public function createService0154(): PHPStan\Type\Php\PrintfFunctionThrowTypeExtension
	{
		return new PHPStan\Type\Php\PrintfFunctionThrowTypeExtension($this->getService('0499'), $this->getService('0137'));
	}


	public function createService0155(): PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension;
	}


	public function createService0156(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension($this->getService('0499'));
	}


	public function createService0157(): PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension
	{
		return new PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension;
	}


	public function createService0158(): PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension;
	}


	public function createService0159(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension($this->getService('0170'));
	}


	public function createService0160(): PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension($this->getService('0499'));
	}


	public function createService0161(): PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension($this->getService('0499'));
	}


	public function createService0162(): PHPStan\Type\Php\GettypeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettypeFunctionReturnTypeExtension;
	}


	public function createService0163(): PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension
	{
		return new PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension;
	}


	public function createService0164(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0165(): PHPStan\Type\Php\RoundFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RoundFunctionReturnTypeExtension($this->getService('0499'));
	}


	public function createService0166(): PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension;
	}


	public function createService0167(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0168(): PHPStan\Type\Php\RandomizerMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomizerMethodReturnTypeExtension;
	}


	public function createService0169(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0170(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper;
	}


	public function createService0171(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0172(): PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension($this->getService('0219'));
	}


	public function createService0173(): PHPStan\Type\Php\ConstantHelper
	{
		return new PHPStan\Type\Php\ConstantHelper;
	}


	public function createService0174(): PHPStan\Type\Php\PowFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PowFunctionReturnTypeExtension;
	}


	public function createService0175(): PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension;
	}


	public function createService0176(): PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension(
			$this->getService('0126'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0177(): PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0178(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0179(): PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension($this->getService('0499'));
	}


	public function createService0180(): PHPStan\Type\Php\ClosureGetCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureGetCurrentDynamicReturnTypeExtension;
	}


	public function createService0181(): PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension;
	}


	public function createService0182(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0183(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0184(): PHPStan\Type\Php\StrlenFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\StrlenFunctionTypeSpecifyingExtension;
	}


	public function createService0185(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension($this->getService('0173'));
	}


	public function createService0186(): PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension($this->getService('0499'));
	}


	public function createService0187(): PHPStan\Type\Php\StrSplitFunctionThrowTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionThrowTypeExtension($this->getService('0499'));
	}


	public function createService0188(): PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension;
	}


	public function createService0189(): PHPStan\Type\Php\ArrayChunkFunctionThrowTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChunkFunctionThrowTypeExtension($this->getService('0499'));
	}


	public function createService0190(): PHPStan\Type\Php\GmpUnaryOperatorTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\GmpUnaryOperatorTypeSpecifyingExtension;
	}


	public function createService0191(): PHPStan\Type\Php\DateIntervalFormatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalFormatFunctionReturnTypeExtension($this->getService('079'));
	}


	public function createService0192(): PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension;
	}


	public function createService0193(): PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension;
	}


	public function createService0194(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0195(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension($this->getService('0499'));
	}


	public function createService0196(): PHPStan\Type\Php\ReflectionClassConstantConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionClassConstantConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0197(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension($this->getService('0499'));
	}


	public function createService0198(): PHPStan\Type\Php\ArrayFindParameterClosureTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFindParameterClosureTypeExtension;
	}


	public function createService0199(): PHPStan\Type\Php\ThrowableReturnTypeExtension
	{
		return new PHPStan\Type\Php\ThrowableReturnTypeExtension;
	}


	public function createService0200(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension($this->getService('0499'));
	}


	public function createService0201(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0202(): PHPStan\Type\Php\PgResultStatusDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PgResultStatusDynamicReturnTypeExtension;
	}


	public function createService0203(): PHPStan\Type\Php\ArrayFilterParameterClosureTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterParameterClosureTypeExtension;
	}


	public function createService0204(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension($this->getService('0219'));
	}


	public function createService0205(): PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension($this->getService('0499'));
	}


	public function createService0206(): PHPStan\Type\Php\LocaltimeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\LocaltimeFunctionDynamicReturnTypeExtension;
	}


	public function createService0207(): PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension($this->getService('0499'));
	}


	public function createService0208(): PHPStan\Type\Php\AssertThrowTypeExtension
	{
		return new PHPStan\Type\Php\AssertThrowTypeExtension;
	}


	public function createService0209(): PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension;
	}


	public function createService0210(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0211(): PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension;
	}


	public function createService0212(): PHPStan\Type\Php\UnserializeFunctionThrowTypeExtension
	{
		return new PHPStan\Type\Php\UnserializeFunctionThrowTypeExtension($this->getService('0499'));
	}


	public function createService0213(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension($this->getService('0499'));
	}


	public function createService0214(): PHPStan\Type\Php\PgLastNoticeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PgLastNoticeDynamicReturnTypeExtension;
	}


	public function createService0215(): PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension($this->getService('0499'));
	}


	public function createService0216(): PHPStan\Type\Php\GmpOperatorTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\GmpOperatorTypeSpecifyingExtension;
	}


	public function createService0217(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension($this->getService('0499'));
	}


	public function createService0218(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0219(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('0499')
		);
	}


	public function createService0220(): PHPStan\Type\Php\ArrayCombineFunctionThrowTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCombineFunctionThrowTypeExtension($this->getService('078'));
	}


	public function createService0221(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('0464'));
	}


	public function createService0222(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0223(): PHPStan\Type\Php\IniGetReturnTypeExtension
	{
		return new PHPStan\Type\Php\IniGetReturnTypeExtension;
	}


	public function createService0224(): PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension($this->getService('0138'));
	}


	public function createService0225(): PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension;
	}


	public function createService0226(): PHPStan\Type\Php\DateFormatMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatMethodReturnTypeExtension($this->getService('0138'));
	}


	public function createService0227(): PHPStan\Type\Php\StrPadFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrPadFunctionReturnTypeExtension;
	}


	public function createService0228(): PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension($this->getService('0499'));
	}


	public function createService0229(): PHPStan\Type\Php\TriggerErrorFunctionThrowTypeExtension
	{
		return new PHPStan\Type\Php\TriggerErrorFunctionThrowTypeExtension(
			$this->getService('0499'),
			$this->getParameter('exceptions')['implicitThrows']
		);
	}


	public function createService0230(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension($this->getService('0499'));
	}


	public function createService0231(): PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension
	{
		return new PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension($this->getService('0499'));
	}


	public function createService0232(): PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension;
	}


	public function createService0233(): PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension($this->getService('0499'));
	}


	public function createService0234(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension($this->getService('0499'));
	}


	public function createService0235(): PHPStan\Type\OperatorTypeSpecifyingExtensionRegistry
	{
		return new PHPStan\Type\OperatorTypeSpecifyingExtensionRegistry($this->getService('phpstan.extensionsCollection.PHPStan.Type.OperatorTypeSpecifyingExtension'));
	}


	public function createService0236(): PHPStan\Node\Printer\Printer
	{
		return new PHPStan\Node\Printer\Printer;
	}


	public function createService0237(): PHPStan\Node\Printer\ExprPrinter
	{
		return new PHPStan\Node\Printer\ExprPrinter($this->getService('0236'));
	}


	public function createService0238(): PHPStan\Parser\ArrayMapArgVisitor
	{
		return new PHPStan\Parser\ArrayMapArgVisitor;
	}


	public function createService0239(): PHPStan\Parser\ParentStmtTypesVisitor
	{
		return new PHPStan\Parser\ParentStmtTypesVisitor;
	}


	public function createService0240(): PHPStan\Parser\ArrayFilterArgVisitor
	{
		return new PHPStan\Parser\ArrayFilterArgVisitor;
	}


	public function createService0241(): PHPStan\Parser\MagicConstantParamDefaultVisitor
	{
		return new PHPStan\Parser\MagicConstantParamDefaultVisitor;
	}


	public function createService0242(): PHPStan\Parser\ClosureArgVisitor
	{
		return new PHPStan\Parser\ClosureArgVisitor;
	}


	public function createService0243(): PHPStan\Parser\TryCatchTypeVisitor
	{
		return new PHPStan\Parser\TryCatchTypeVisitor;
	}


	public function createService0244(): PHPStan\Parser\ImplodeArgVisitor
	{
		return new PHPStan\Parser\ImplodeArgVisitor;
	}


	public function createService0245(): PHPStan\Parser\LastConditionVisitor
	{
		return new PHPStan\Parser\LastConditionVisitor;
	}


	public function createService0246(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('0499'));
	}


	public function createService0247(): PHPStan\Parser\ArrayOffsetNormalizingVisitor
	{
		return new PHPStan\Parser\ArrayOffsetNormalizingVisitor;
	}


	public function createService0248(): PHPStan\Parser\ArrowFunctionArgVisitor
	{
		return new PHPStan\Parser\ArrowFunctionArgVisitor;
	}


	public function createService0249(): PHPStan\Parser\ImmediatelyInvokedClosureVisitor
	{
		return new PHPStan\Parser\ImmediatelyInvokedClosureVisitor;
	}


	public function createService0250(): PHPStan\Parser\StandaloneThrowExprVisitor
	{
		return new PHPStan\Parser\StandaloneThrowExprVisitor;
	}


	public function createService0251(): PHPStan\Parser\TypeTraverserInstanceofVisitor
	{
		return new PHPStan\Parser\TypeTraverserInstanceofVisitor;
	}


	public function createService0252(): PHPStan\Parser\CurlSetOptArgVisitor
	{
		return new PHPStan\Parser\CurlSetOptArgVisitor;
	}


	public function createService0253(): PHPStan\Parser\CurlSetOptArrayArgVisitor
	{
		return new PHPStan\Parser\CurlSetOptArrayArgVisitor;
	}


	public function createService0254(): PHPStan\Parser\DeclarePositionVisitor
	{
		return new PHPStan\Parser\DeclarePositionVisitor;
	}


	public function createService0255(): PHPStan\Parser\UseAliasVisitor
	{
		return new PHPStan\Parser\UseAliasVisitor;
	}


	public function createService0256(): PHPStan\Parser\ClosureBindArgVisitor
	{
		return new PHPStan\Parser\ClosureBindArgVisitor;
	}


	public function createService0257(): PHPStan\Parser\GotoLabelVisitor
	{
		return new PHPStan\Parser\GotoLabelVisitor;
	}


	public function createService0258(): PHPStan\Parser\AnonymousClassVisitor
	{
		return new PHPStan\Parser\AnonymousClassVisitor;
	}


	public function createService0259(): PHPStan\Parser\ClosureBindToVarVisitor
	{
		return new PHPStan\Parser\ClosureBindToVarVisitor;
	}


	public function createService0260(): PHPStan\Parser\ArrayFindArgVisitor
	{
		return new PHPStan\Parser\ArrayFindArgVisitor;
	}


	public function createService0261(): PHPStan\Parser\NewAssignedToPropertyVisitor
	{
		return new PHPStan\Parser\NewAssignedToPropertyVisitor;
	}


	public function createService0262(): PHPStan\Parser\ArrayWalkArgVisitor
	{
		return new PHPStan\Parser\ArrayWalkArgVisitor;
	}


	public function createService0263(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('0275'), $this->getService('0274'), $this->getService('0458'));
	}


	public function createService0264(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('026'));
	}


	public function createService0265(): PHPStan\PhpDoc\JsonValidateStubFilesExtension
	{
		return new PHPStan\PhpDoc\JsonValidateStubFilesExtension($this->getService('0499'));
	}


	public function createService0266(): PHPStan\PhpDoc\DefaultStubFilesProvider
	{
		return new PHPStan\PhpDoc\DefaultStubFilesProvider(
			$this->getService('phpstan.extensionsCollection.PHPStan.PhpDoc.StubFilesExtension'),
			$this->getService('0408'),
			$this->getParameter('stubFiles'),
			$this->getParameter('composerAutoloaderProjectPaths')
		);
	}


	public function createService0267(): PHPStan\PhpDoc\ExtDsStubFilesExtension
	{
		return new PHPStan\PhpDoc\ExtDsStubFilesExtension($this->getService('0524'));
	}


	public function createService0268(): PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('0406'));
	}


	public function createService0269(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('0873'), $this->getService('0874'), $this->getService('0275'));
	}


	public function createService0270(): PHPStan\PhpDoc\BcMathNumberStubFilesExtension
	{
		return new PHPStan\PhpDoc\BcMathNumberStubFilesExtension($this->getService('0499'));
	}


	public function createService0271(): PHPStan\PhpDoc\ReflectionClassStubFilesExtension
	{
		return new PHPStan\PhpDoc\ReflectionClassStubFilesExtension($this->getService('0499'));
	}


	public function createService0272(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('0873'), $this->getService('0876'));
	}


	public function createService0273(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator($this->getService('0404'), $this->getService('0406'), $this->getService('0266'));
	}


	public function createService0274(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver($this->getService('0518'), $this->getService('0538'));
	}


	public function createService0275(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver(
			$this->getService('0268'),
			$this->getService('0518'),
			$this->getService('021'),
			$this->getService('0279'),
			$this->getService('0538'),
			$this->getParameter('reportUnsafeArrayStringKeyCasting')
		);
	}


	public function createService0276(): PHPStan\PhpDoc\ReflectionEnumStubFilesExtension
	{
		return new PHPStan\PhpDoc\ReflectionEnumStubFilesExtension($this->getService('0499'));
	}


	public function createService0277(): PHPStan\PhpDoc\SocketSelectStubFilesExtension
	{
		return new PHPStan\PhpDoc\SocketSelectStubFilesExtension($this->getService('0499'));
	}


	public function createService0278(): PHPStan\Analyser\LocalIgnoresProcessor
	{
		return new PHPStan\Analyser\LocalIgnoresProcessor;
	}


	public function createService0279(): PHPStan\Analyser\ConstantResolver
	{
		return $this->getService('0282')->create();
	}


	public function createService0280(): PHPStan\Analyser\VarAnnotationProcessor
	{
		return new PHPStan\Analyser\VarAnnotationProcessor($this->getService('026'));
	}


	public function createService0281(): PHPStan\Analyser\CalledMethodProcessor
	{
		return new PHPStan\Analyser\CalledMethodProcessor(
			$this->getService('0408'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('0285')
		);
	}


	public function createService0282(): PHPStan\Analyser\ConstantResolverFactory
	{
		return new PHPStan\Analyser\ConstantResolverFactory($this->getService('0518'), $this->getService('0406'));
	}


	public function createService0283(): PHPStan\Analyser\Ignore\IgnoreLexer
	{
		return new PHPStan\Analyser\Ignore\IgnoreLexer;
	}


	public function createService0284(): PHPStan\Analyser\Ignore\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\Ignore\IgnoredErrorHelper(
			$this->getService('0408'),
			$this->getParameter('ignoreErrors'),
			$this->getParameter('reportUnmatchedIgnoredErrors')
		);
	}


	public function createService0285(): PHPStan\Analyser\ScopeFactory
	{
		return new PHPStan\Analyser\ScopeFactory($this->getService('0539'));
	}


	public function createService0286(): PHPStan\Analyser\PropertyHookThrowPointsResolver
	{
		return new PHPStan\Analyser\PropertyHookThrowPointsResolver($this->getParameter('exceptions')['implicitThrows']);
	}


	public function createService0287(): PHPStan\Analyser\RicherScopeGetTypeHelper
	{
		return new PHPStan\Analyser\RicherScopeGetTypeHelper($this->getService('0538'), $this->getService('0464'));
	}


	public function createService0288(): PHPStan\Analyser\PhpDocsResolver
	{
		return new PHPStan\Analyser\PhpDocsResolver($this->getService('026'), $this->getService('0264'));
	}


	public function createService0289(): PHPStan\Analyser\PropertyHooksProcessor
	{
		return new PHPStan\Analyser\PropertyHooksProcessor($this->getService('0401'), $this->getService('0288'));
	}


	public function createService0290(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('0406'),
			$this->getService('reflectionProvider'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.FunctionParameterOutTypeExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.MethodParameterOutTypeExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.StaticMethodParameterOutTypeExtension'),
			$this->getService('026'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.Properties.ReadWritePropertiesExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.FunctionParameterClosureThisExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.MethodParameterClosureThisExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.StaticMethodParameterClosureThisExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.FunctionParameterClosureTypeExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.MethodParameterClosureTypeExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.StaticMethodParameterClosureTypeExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Analyser.PerFileAnalysisResettable'),
			$this->getParameter('polluteScopeWithLoopInitialAssignments'),
			$this->getParameter('polluteScopeWithAlwaysIterableForeach'),
			$this->getParameter('exceptions')['implicitThrows'],
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getService('0540')
		);
	}


	public function createService0291(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('0285'),
			$this->getService('0290'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('09'),
			$this->getService('011'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Analyser.IgnoreErrorExtension'),
			$this->getService('0293'),
			$this->getService('0278'),
			$this->getParameter('reportIgnoresWithoutComments')
		);
	}


	public function createService0292(): PHPStan\Analyser\ExpressionResultStorageStack
	{
		return new PHPStan\Analyser\ExpressionResultStorageStack;
	}


	public function createService0293(): PHPStan\Analyser\RuleErrorTransformer
	{
		return new PHPStan\Analyser\RuleErrorTransformer($this->getService('currentPhpVersionPhpParser'));
	}


	public function createService0294(): PHPStan\Analyser\StmtHandler\IfHandler
	{
		return new PHPStan\Analyser\StmtHandler\IfHandler;
	}


	public function createService0295(): PHPStan\Analyser\StmtHandler\ForHandler
	{
		return new PHPStan\Analyser\StmtHandler\ForHandler;
	}


	public function createService0296(): PHPStan\Analyser\StmtHandler\UseHandler
	{
		return new PHPStan\Analyser\StmtHandler\UseHandler;
	}


	public function createService0297(): PHPStan\Analyser\StmtHandler\StaticVariableHandler
	{
		return new PHPStan\Analyser\StmtHandler\StaticVariableHandler($this->getService('0280'));
	}


	public function createService0298(): PHPStan\Analyser\StmtHandler\DoWhileHandler
	{
		return new PHPStan\Analyser\StmtHandler\DoWhileHandler;
	}


	public function createService0299(): PHPStan\Analyser\StmtHandler\ExpressionHandler
	{
		return new PHPStan\Analyser\StmtHandler\ExpressionHandler($this->getService('typeSpecifier'));
	}


	public function createService0300(): PHPStan\Analyser\StmtHandler\EnumCaseHandler
	{
		return new PHPStan\Analyser\StmtHandler\EnumCaseHandler;
	}


	public function createService0301(): PHPStan\Analyser\StmtHandler\InlineHtmlHandler
	{
		return new PHPStan\Analyser\StmtHandler\InlineHtmlHandler;
	}


	public function createService0302(): PHPStan\Analyser\StmtHandler\EchoHandler
	{
		return new PHPStan\Analyser\StmtHandler\EchoHandler($this->getService('0347'));
	}


	public function createService0303(): PHPStan\Analyser\StmtHandler\GroupUseHandler
	{
		return new PHPStan\Analyser\StmtHandler\GroupUseHandler;
	}


	public function createService0304(): PHPStan\Analyser\StmtHandler\SwitchHandler
	{
		return new PHPStan\Analyser\StmtHandler\SwitchHandler;
	}


	public function createService0305(): PHPStan\Analyser\StmtHandler\GotoHandler
	{
		return new PHPStan\Analyser\StmtHandler\GotoHandler;
	}


	public function createService0306(): PHPStan\Analyser\StmtHandler\ForeachHandler
	{
		return new PHPStan\Analyser\StmtHandler\ForeachHandler(
			$this->getService('0280'),
			$this->getParameter('exceptions')['implicitThrows']
		);
	}


	public function createService0307(): PHPStan\Analyser\StmtHandler\BreakContinueHandler
	{
		return new PHPStan\Analyser\StmtHandler\BreakContinueHandler;
	}


	public function createService0308(): PHPStan\Analyser\StmtHandler\TraitUseHandler
	{
		return new PHPStan\Analyser\StmtHandler\TraitUseHandler(
			$this->getService('reflectionProvider'),
			$this->getService('0408'),
			$this->getService('defaultAnalysisParser')
		);
	}


	public function createService0309(): PHPStan\Analyser\StmtHandler\LabelHandler
	{
		return new PHPStan\Analyser\StmtHandler\LabelHandler;
	}


	public function createService0310(): PHPStan\Analyser\StmtHandler\NamespaceHandler
	{
		return new PHPStan\Analyser\StmtHandler\NamespaceHandler;
	}


	public function createService0311(): PHPStan\Analyser\StmtHandler\TryCatchHandler
	{
		return new PHPStan\Analyser\StmtHandler\TryCatchHandler;
	}


	public function createService0312(): PHPStan\Analyser\StmtHandler\ClassLikeHandler
	{
		return new PHPStan\Analyser\StmtHandler\ClassLikeHandler(
			$this->getService('0281'),
			$this->getService('reflectionProvider'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0547')
		);
	}


	public function createService0313(): PHPStan\Analyser\StmtHandler\WhileHandler
	{
		return new PHPStan\Analyser\StmtHandler\WhileHandler;
	}


	public function createService0314(): PHPStan\Analyser\StmtHandler\PropertyHandler
	{
		return new PHPStan\Analyser\StmtHandler\PropertyHandler($this->getService('0288'), $this->getService('0289'));
	}


	public function createService0315(): PHPStan\Analyser\StmtHandler\ClassConstHandler
	{
		return new PHPStan\Analyser\StmtHandler\ClassConstHandler;
	}


	public function createService0316(): PHPStan\Analyser\StmtHandler\FunctionHandler
	{
		return new PHPStan\Analyser\StmtHandler\FunctionHandler($this->getService('0401'), $this->getService('0288'));
	}


	public function createService0317(): PHPStan\Analyser\StmtHandler\ClassMethodHandler
	{
		return new PHPStan\Analyser\StmtHandler\ClassMethodHandler(
			$this->getService('0401'),
			$this->getService('0288'),
			$this->getService('0289')
		);
	}


	public function createService0318(): PHPStan\Analyser\StmtHandler\BlockHandler
	{
		return new PHPStan\Analyser\StmtHandler\BlockHandler($this->getParameter('polluteScopeWithBlock'));
	}


	public function createService0319(): PHPStan\Analyser\StmtHandler\GlobalHandler
	{
		return new PHPStan\Analyser\StmtHandler\GlobalHandler($this->getService('0280'));
	}


	public function createService0320(): PHPStan\Analyser\StmtHandler\TraitHandler
	{
		return new PHPStan\Analyser\StmtHandler\TraitHandler;
	}


	public function createService0321(): PHPStan\Analyser\StmtHandler\NopHandler
	{
		return new PHPStan\Analyser\StmtHandler\NopHandler;
	}


	public function createService0322(): PHPStan\Analyser\StmtHandler\ConstHandler
	{
		return new PHPStan\Analyser\StmtHandler\ConstHandler;
	}


	public function createService0323(): PHPStan\Analyser\StmtHandler\ReturnHandler
	{
		return new PHPStan\Analyser\StmtHandler\ReturnHandler;
	}


	public function createService0324(): PHPStan\Analyser\StmtHandler\DeclareHandler
	{
		return new PHPStan\Analyser\StmtHandler\DeclareHandler;
	}


	public function createService0325(): PHPStan\Analyser\StmtHandler\UnsetHandler
	{
		return new PHPStan\Analyser\StmtHandler\UnsetHandler($this->getService('0406'));
	}


	public function createService0326(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser(
			$this->getService('0291'),
			$this->getService('registry'),
			$this->getService('06'),
			$this->getService('0290'),
			$this->getParameter('internalErrorsCountLimit')
		);
	}


	public function createService0327(): PHPStan\Analyser\ExprHandler\PostDecHandler
	{
		return new PHPStan\Analyser\ExprHandler\PostDecHandler($this->getService('0540'));
	}


	public function createService0328(): PHPStan\Analyser\ExprHandler\PrintHandler
	{
		return new PHPStan\Analyser\ExprHandler\PrintHandler($this->getService('0347'), $this->getService('0540'));
	}


	public function createService0329(): PHPStan\Analyser\ExprHandler\BooleanOrHandler
	{
		return new PHPStan\Analyser\ExprHandler\BooleanOrHandler(
			$this->getService('0290'),
			$this->getService('0346'),
			$this->getService('0540')
		);
	}


	public function createService0330(): PHPStan\Analyser\ExprHandler\Virtual\InstantiationCallableNodeHandler
	{
		return new PHPStan\Analyser\ExprHandler\Virtual\InstantiationCallableNodeHandler($this->getService('0540'));
	}


	public function createService0331(): PHPStan\Analyser\ExprHandler\Virtual\ExistingArrayDimFetchHandler
	{
		return new PHPStan\Analyser\ExprHandler\Virtual\ExistingArrayDimFetchHandler($this->getService('0540'));
	}


	public function createService0332(): PHPStan\Analyser\ExprHandler\Virtual\AlwaysRememberedExprHandler
	{
		return new PHPStan\Analyser\ExprHandler\Virtual\AlwaysRememberedExprHandler($this->getService('0540'));
	}


	public function createService0333(): PHPStan\Analyser\ExprHandler\Virtual\IssetExprHandler
	{
		return new PHPStan\Analyser\ExprHandler\Virtual\IssetExprHandler($this->getService('0540'));
	}


	public function createService0334(): PHPStan\Analyser\ExprHandler\Virtual\FunctionCallableNodeHandler
	{
		return new PHPStan\Analyser\ExprHandler\Virtual\FunctionCallableNodeHandler($this->getService('0540'));
	}


	public function createService0335(): PHPStan\Analyser\ExprHandler\Virtual\SetExistingOffsetValueTypeExprHandler
	{
		return new PHPStan\Analyser\ExprHandler\Virtual\SetExistingOffsetValueTypeExprHandler($this->getService('0540'));
	}


	public function createService0336(): PHPStan\Analyser\ExprHandler\Virtual\SetOffsetValueTypeExprHandler
	{
		return new PHPStan\Analyser\ExprHandler\Virtual\SetOffsetValueTypeExprHandler($this->getService('0540'));
	}


	public function createService0337(): PHPStan\Analyser\ExprHandler\Virtual\MethodCallableNodeHandler
	{
		return new PHPStan\Analyser\ExprHandler\Virtual\MethodCallableNodeHandler($this->getService('0540'));
	}


	public function createService0338(): PHPStan\Analyser\ExprHandler\Virtual\TypeExprHandler
	{
		return new PHPStan\Analyser\ExprHandler\Virtual\TypeExprHandler($this->getService('0540'));
	}


	public function createService0339(): PHPStan\Analyser\ExprHandler\Virtual\NativeTypeExprHandler
	{
		return new PHPStan\Analyser\ExprHandler\Virtual\NativeTypeExprHandler($this->getService('0540'));
	}


	public function createService0340(): PHPStan\Analyser\ExprHandler\Virtual\StaticMethodCallableNodeHandler
	{
		return new PHPStan\Analyser\ExprHandler\Virtual\StaticMethodCallableNodeHandler($this->getService('0540'));
	}


	public function createService0341(): PHPStan\Analyser\ExprHandler\Virtual\UnsetOffsetExprHandler
	{
		return new PHPStan\Analyser\ExprHandler\Virtual\UnsetOffsetExprHandler($this->getService('0540'));
	}


	public function createService0342(): PHPStan\Analyser\ExprHandler\Helper\EarlyTerminatingCallHelper
	{
		return new PHPStan\Analyser\ExprHandler\Helper\EarlyTerminatingCallHelper(
			$this->getService('reflectionProvider'),
			$this->getParameter('earlyTerminatingMethodCalls'),
			$this->getParameter('earlyTerminatingFunctionCalls')
		);
	}


	public function createService0343(): PHPStan\Analyser\ExprHandler\Helper\MethodThrowPointHelper
	{
		return new PHPStan\Analyser\ExprHandler\Helper\MethodThrowPointHelper(
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.DynamicMethodThrowTypeExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.DynamicStaticMethodThrowTypeExtension'),
			$this->getParameter('exceptions')['implicitThrows']
		);
	}


	public function createService0344(): PHPStan\Analyser\ExprHandler\Helper\ClosureTypeResolver
	{
		return new PHPStan\Analyser\ExprHandler\Helper\ClosureTypeResolver($this->getService('0290'), $this->getService('0538'));
	}


	public function createService0345(): PHPStan\Analyser\ExprHandler\Helper\NonNullabilityHelper
	{
		return new PHPStan\Analyser\ExprHandler\Helper\NonNullabilityHelper;
	}


	public function createService0346(): PHPStan\Analyser\ExprHandler\Helper\ConditionalExpressionHolderHelper
	{
		return new PHPStan\Analyser\ExprHandler\Helper\ConditionalExpressionHolderHelper($this->getService('typeSpecifier'));
	}


	public function createService0347(): PHPStan\Analyser\ExprHandler\Helper\ImplicitToStringCallHelper
	{
		return new PHPStan\Analyser\ExprHandler\Helper\ImplicitToStringCallHelper(
			$this->getService('0499'),
			$this->getService('0343'),
			$this->getService('0540')
		);
	}


	public function createService0348(): PHPStan\Analyser\ExprHandler\Helper\EqualityTypeSpecifyingHelper
	{
		return new PHPStan\Analyser\ExprHandler\Helper\EqualityTypeSpecifyingHelper(
			$this->getService('typeSpecifier'),
			$this->getService('reflectionProvider'),
			$this->getService('0237')
		);
	}


	public function createService0349(): PHPStan\Analyser\ExprHandler\Helper\MethodCallReturnTypeHelper
	{
		return new PHPStan\Analyser\ExprHandler\Helper\MethodCallReturnTypeHelper($this->getService('028'));
	}


	public function createService0350(): PHPStan\Analyser\ExprHandler\Helper\FuncCallScopeEffectsHelper
	{
		return new PHPStan\Analyser\ExprHandler\Helper\FuncCallScopeEffectsHelper($this->getParameter('rememberPossiblyImpureFunctionValues'));
	}


	public function createService0351(): PHPStan\Analyser\ExprHandler\ThrowHandler
	{
		return new PHPStan\Analyser\ExprHandler\ThrowHandler($this->getService('0540'));
	}


	public function createService0352(): PHPStan\Analyser\ExprHandler\CloneHandler
	{
		return new PHPStan\Analyser\ExprHandler\CloneHandler($this->getService('0540'));
	}


	public function createService0353(): PHPStan\Analyser\ExprHandler\AssignOpHandler
	{
		return new PHPStan\Analyser\ExprHandler\AssignOpHandler(
			$this->getService('0355'),
			$this->getService('0538'),
			$this->getService('0347'),
			$this->getService('0540')
		);
	}


	public function createService0354(): PHPStan\Analyser\ExprHandler\CoalesceHandler
	{
		return new PHPStan\Analyser\ExprHandler\CoalesceHandler($this->getService('0345'), $this->getService('0540'));
	}


	public function createService0355(): PHPStan\Analyser\ExprHandler\AssignHandler
	{
		return new PHPStan\Analyser\ExprHandler\AssignHandler(
			$this->getService('0280'),
			$this->getService('typeSpecifier'),
			$this->getService('0499'),
			$this->getService('0237'),
			$this->getService('0381'),
			$this->getService('0540'),
			$this->getService('0464'),
			$this->getService('0345'),
			$this->getService('0395'),
			$this->getService('0362'),
			$this->getService('0367'),
			$this->getService('0400'),
			$this->getService('0343'),
			$this->getService('0286'),
			$this->getService('029')
		);
	}


	public function createService0356(): PHPStan\Analyser\ExprHandler\YieldHandler
	{
		return new PHPStan\Analyser\ExprHandler\YieldHandler($this->getService('0540'));
	}


	public function createService0357(): PHPStan\Analyser\ExprHandler\EmptyHandler
	{
		return new PHPStan\Analyser\ExprHandler\EmptyHandler($this->getService('0345'), $this->getService('0540'));
	}


	public function createService0358(): PHPStan\Analyser\ExprHandler\YieldFromHandler
	{
		return new PHPStan\Analyser\ExprHandler\YieldFromHandler($this->getService('0540'));
	}


	public function createService0359(): PHPStan\Analyser\ExprHandler\ScalarHandler
	{
		return new PHPStan\Analyser\ExprHandler\ScalarHandler($this->getService('0538'), $this->getService('0540'));
	}


	public function createService0360(): PHPStan\Analyser\ExprHandler\BinaryOpHandler
	{
		return new PHPStan\Analyser\ExprHandler\BinaryOpHandler(
			$this->getService('0538'),
			$this->getService('0287'),
			$this->getService('0499'),
			$this->getService('0347'),
			$this->getService('0237'),
			$this->getService('0348'),
			$this->getService('0540')
		);
	}


	public function createService0361(): PHPStan\Analyser\ExprHandler\PreIncHandler
	{
		return new PHPStan\Analyser\ExprHandler\PreIncHandler($this->getService('0540'));
	}


	public function createService0362(): PHPStan\Analyser\ExprHandler\ArrayDimFetchHandler
	{
		return new PHPStan\Analyser\ExprHandler\ArrayDimFetchHandler($this->getService('0540'), $this->getService('0343'));
	}


	public function createService0363(): PHPStan\Analyser\ExprHandler\EvalHandler
	{
		return new PHPStan\Analyser\ExprHandler\EvalHandler($this->getService('0540'));
	}


	public function createService0364(): PHPStan\Analyser\ExprHandler\FirstClassCallableFuncCallHandler
	{
		return new PHPStan\Analyser\ExprHandler\FirstClassCallableFuncCallHandler($this->getService('0538'));
	}


	public function createService0365(): PHPStan\Analyser\ExprHandler\FirstClassCallableStaticCallHandler
	{
		return new PHPStan\Analyser\ExprHandler\FirstClassCallableStaticCallHandler($this->getService('0538'));
	}


	public function createService0366(): PHPStan\Analyser\ExprHandler\BitwiseNotHandler
	{
		return new PHPStan\Analyser\ExprHandler\BitwiseNotHandler($this->getService('0538'), $this->getService('0540'));
	}


	public function createService0367(): PHPStan\Analyser\ExprHandler\PropertyFetchHandler
	{
		return new PHPStan\Analyser\ExprHandler\PropertyFetchHandler(
			$this->getService('0499'),
			$this->getService('0464'),
			$this->getService('0540'),
			$this->getService('0286')
		);
	}


	public function createService0368(): PHPStan\Analyser\ExprHandler\NullsafeMethodCallHandler
	{
		return new PHPStan\Analyser\ExprHandler\NullsafeMethodCallHandler($this->getService('0345'), $this->getService('0540'));
	}


	public function createService0369(): PHPStan\Analyser\ExprHandler\PipeHandler
	{
		return new PHPStan\Analyser\ExprHandler\PipeHandler($this->getService('0540'));
	}


	public function createService0370(): PHPStan\Analyser\ExprHandler\ClosureHandler
	{
		return new PHPStan\Analyser\ExprHandler\ClosureHandler($this->getService('0344'), $this->getService('0540'));
	}


	public function createService0371(): PHPStan\Analyser\ExprHandler\ErrorSuppressHandler
	{
		return new PHPStan\Analyser\ExprHandler\ErrorSuppressHandler($this->getService('0540'));
	}


	public function createService0372(): PHPStan\Analyser\ExprHandler\ShellExecHandler
	{
		return new PHPStan\Analyser\ExprHandler\ShellExecHandler($this->getService('0347'), $this->getService('0540'));
	}


	public function createService0373(): PHPStan\Analyser\ExprHandler\ConstFetchHandler
	{
		return new PHPStan\Analyser\ExprHandler\ConstFetchHandler($this->getService('0279'), $this->getService('0540'));
	}


	public function createService0374(): PHPStan\Analyser\ExprHandler\CastHandler
	{
		return new PHPStan\Analyser\ExprHandler\CastHandler($this->getService('0538'), $this->getService('0540'));
	}


	public function createService0375(): PHPStan\Analyser\ExprHandler\ArrayHandler
	{
		return new PHPStan\Analyser\ExprHandler\ArrayHandler($this->getService('0538'), $this->getService('0540'));
	}


	public function createService0376(): PHPStan\Analyser\ExprHandler\IncludeHandler
	{
		return new PHPStan\Analyser\ExprHandler\IncludeHandler($this->getService('0540'));
	}


	public function createService0377(): PHPStan\Analyser\ExprHandler\MethodCallHandler
	{
		return new PHPStan\Analyser\ExprHandler\MethodCallHandler(
			$this->getService('0281'),
			$this->getService('0342'),
			$this->getService('0349'),
			$this->getService('0343'),
			$this->getService('reflectionProvider'),
			$this->getParameter('rememberPossiblyImpureFunctionValues'),
			$this->getService('0540')
		);
	}


	public function createService0378(): PHPStan\Analyser\ExprHandler\CastStringHandler
	{
		return new PHPStan\Analyser\ExprHandler\CastStringHandler(
			$this->getService('0538'),
			$this->getService('0347'),
			$this->getService('0540')
		);
	}


	public function createService0379(): PHPStan\Analyser\ExprHandler\PreDecHandler
	{
		return new PHPStan\Analyser\ExprHandler\PreDecHandler($this->getService('0540'));
	}


	public function createService0380(): PHPStan\Analyser\ExprHandler\UnaryPlusHandler
	{
		return new PHPStan\Analyser\ExprHandler\UnaryPlusHandler($this->getService('0538'), $this->getService('0540'));
	}


	public function createService0381(): PHPStan\Analyser\ExprHandler\MatchHandler
	{
		return new PHPStan\Analyser\ExprHandler\MatchHandler(
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getService('0540')
		);
	}


	public function createService0382(): PHPStan\Analyser\ExprHandler\TernaryHandler
	{
		return new PHPStan\Analyser\ExprHandler\TernaryHandler($this->getService('0290'), $this->getService('0540'));
	}


	public function createService0383(): PHPStan\Analyser\ExprHandler\InstanceofHandler
	{
		return new PHPStan\Analyser\ExprHandler\InstanceofHandler($this->getService('0540'));
	}


	public function createService0384(): PHPStan\Analyser\ExprHandler\ArrowFunctionHandler
	{
		return new PHPStan\Analyser\ExprHandler\ArrowFunctionHandler($this->getService('0344'), $this->getService('0540'));
	}


	public function createService0385(): PHPStan\Analyser\ExprHandler\FirstClassCallableMethodCallHandler
	{
		return new PHPStan\Analyser\ExprHandler\FirstClassCallableMethodCallHandler($this->getService('0538'));
	}


	public function createService0386(): PHPStan\Analyser\ExprHandler\StaticCallHandler
	{
		return new PHPStan\Analyser\ExprHandler\StaticCallHandler(
			$this->getService('0342'),
			$this->getService('0349'),
			$this->getService('0343'),
			$this->getService('reflectionProvider'),
			$this->getParameter('rememberPossiblyImpureFunctionValues'),
			$this->getService('0540')
		);
	}


	public function createService0387(): PHPStan\Analyser\ExprHandler\FuncCallHandler
	{
		return new PHPStan\Analyser\ExprHandler\FuncCallHandler(
			$this->getService('0342'),
			$this->getService('reflectionProvider'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.DynamicFunctionThrowTypeExtension'),
			$this->getService('028'),
			$this->getParameter('exceptions')['implicitThrows'],
			$this->getService('0350'),
			$this->getService('0540'),
			$this->getService('0451')
		);
	}


	public function createService0388(): PHPStan\Analyser\ExprHandler\InterpolatedStringHandler
	{
		return new PHPStan\Analyser\ExprHandler\InterpolatedStringHandler(
			$this->getService('0538'),
			$this->getService('0347'),
			$this->getService('0540')
		);
	}


	public function createService0389(): PHPStan\Analyser\ExprHandler\FirstClassCallableNewHandler
	{
		return new PHPStan\Analyser\ExprHandler\FirstClassCallableNewHandler($this->getService('0538'));
	}


	public function createService0390(): PHPStan\Analyser\ExprHandler\ClassConstFetchHandler
	{
		return new PHPStan\Analyser\ExprHandler\ClassConstFetchHandler($this->getService('0538'), $this->getService('0540'));
	}


	public function createService0391(): PHPStan\Analyser\ExprHandler\BooleanAndHandler
	{
		return new PHPStan\Analyser\ExprHandler\BooleanAndHandler(
			$this->getService('0290'),
			$this->getService('0346'),
			$this->getService('0540')
		);
	}


	public function createService0392(): PHPStan\Analyser\ExprHandler\NewHandler
	{
		return new PHPStan\Analyser\ExprHandler\NewHandler(
			$this->getService('reflectionProvider'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Type.DynamicStaticMethodThrowTypeExtension'),
			$this->getService('028'),
			$this->getService('0464'),
			$this->getParameter('exceptions')['implicitThrows'],
			$this->getService('0540')
		);
	}


	public function createService0393(): PHPStan\Analyser\ExprHandler\UnaryMinusHandler
	{
		return new PHPStan\Analyser\ExprHandler\UnaryMinusHandler($this->getService('0538'), $this->getService('0540'));
	}


	public function createService0394(): PHPStan\Analyser\ExprHandler\ExitHandler
	{
		return new PHPStan\Analyser\ExprHandler\ExitHandler($this->getService('0540'));
	}


	public function createService0395(): PHPStan\Analyser\ExprHandler\VariableHandler
	{
		return new PHPStan\Analyser\ExprHandler\VariableHandler($this->getService('0540'));
	}


	public function createService0396(): PHPStan\Analyser\ExprHandler\NullsafePropertyFetchHandler
	{
		return new PHPStan\Analyser\ExprHandler\NullsafePropertyFetchHandler($this->getService('0345'), $this->getService('0540'));
	}


	public function createService0397(): PHPStan\Analyser\ExprHandler\IssetHandler
	{
		return new PHPStan\Analyser\ExprHandler\IssetHandler(
			$this->getService('0345'),
			$this->getService('0540'),
			$this->getService('0343')
		);
	}


	public function createService0398(): PHPStan\Analyser\ExprHandler\BooleanNotHandler
	{
		return new PHPStan\Analyser\ExprHandler\BooleanNotHandler($this->getService('0540'));
	}


	public function createService0399(): PHPStan\Analyser\ExprHandler\PostIncHandler
	{
		return new PHPStan\Analyser\ExprHandler\PostIncHandler($this->getService('0540'));
	}


	public function createService0400(): PHPStan\Analyser\ExprHandler\StaticPropertyFetchHandler
	{
		return new PHPStan\Analyser\ExprHandler\StaticPropertyFetchHandler($this->getService('0464'), $this->getService('0540'));
	}


	public function createService0401(): PHPStan\Analyser\DeprecatedAttributeResolver
	{
		return new PHPStan\Analyser\DeprecatedAttributeResolver($this->getService('0538'));
	}


	public function createService0402(): PHPStan\Analyser\ResultCache\ResultCacheClearer
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheClearer($this->getParameter('resultCachePath'));
	}


	public function createService0403(): PHPStan\Analyser\AnalyserResultFinalizer
	{
		return new PHPStan\Analyser\AnalyserResultFinalizer(
			$this->getService('registry'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Analyser.IgnoreErrorExtension'),
			$this->getService('0293'),
			$this->getService('0285'),
			$this->getService('0278'),
			$this->getParameter('reportUnmatchedIgnoredErrors')
		);
	}


	public function createService0404(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			$this->getParameter('currentWorkingDirectory'),
			$this->getParameter('tempDir'),
			$this->getParameter('additionalConfigFiles'),
			$this->getParameter('analysedPaths'),
			$this->getParameter('composerAutoloaderProjectPaths'),
			$this->getParameter('analysedPathsFromConfig'),
			$this->getParameter('usedLevel'),
			$this->getParameter('generateBaselineFile'),
			$this->getParameter('cliAutoloadFile'),
			$this->getParameter('singleReflectionFile'),
			$this->getParameter('singleReflectionInsteadOfFile')
		);
	}


	public function createService0405(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService0406(): PHPStan\DependencyInjection\MemoizingContainer
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('0405'));
	}


	public function createService0407(): PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('0406'));
	}


	public function createService0408(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper($this->getParameter('currentWorkingDirectory'));
	}


	public function createService0409(): PHPStan\File\IncludedFilePathResolver
	{
		return new PHPStan\File\IncludedFilePathResolver($this->getParameter('currentWorkingDirectory'), $this->getService('0408'));
	}


	public function createService0410(): PHPStan\File\FileExcluderFactory
	{
		return new PHPStan\File\FileExcluderFactory($this->getService('0542'), $this->getParameter('excludePaths'));
	}


	public function createService0411(): PHPStan\File\DirectoryWalker
	{
		return new PHPStan\File\DirectoryWalker;
	}


	public function createService0412(): PHPStan\File\FileMonitor
	{
		return new PHPStan\File\FileMonitor(
			$this->getService('fileFinderAnalyse'),
			$this->getService('fileFinderScan'),
			$this->getParameter('analysedPaths'),
			$this->getParameter('analysedPathsFromConfig'),
			$this->getParameter('scanFiles'),
			$this->getParameter('scanDirectories'),
			$this->getService('0411')
		);
	}


	public function createService0413(): PHPStan\File\FileContentHasher
	{
		return new PHPStan\File\FileContentHasher;
	}


	public function createService0414(): PHPStan\Internal\HttpClientFactory
	{
		return new PHPStan\Internal\HttpClientFactory;
	}


	public function createService0415(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck(
			$this->getService('reflectionProvider'),
			$this->getParameter('checkInternalClassCaseSensitivity'),
			$this->getParameter('featureToggles')['checkImportedClassNameCase']
		);
	}


	public function createService0416(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck(
			$this->getService('0449'),
			$this->getParameter('reportMaybes'),
			$this->getParameter('reportPossiblyNonexistentGeneralArrayOffset'),
			$this->getParameter('reportPossiblyNonexistentConstantArrayOffset')
		);
	}


	public function createService0417(): PHPStan\Rules\Playground\NeverRuleHelper
	{
		return new PHPStan\Rules\Playground\NeverRuleHelper;
	}


	public function createService0418(): PHPStan\Rules\Variables\ParameterOutTypeCheck
	{
		return new PHPStan\Rules\Variables\ParameterOutTypeCheck($this->getService('0449'));
	}


	public function createService0419(): PHPStan\Rules\ClassNameCheck
	{
		return new PHPStan\Rules\ClassNameCheck(
			$this->getService('0415'),
			$this->getService('0448'),
			$this->getService('reflectionProvider'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedClassNameUsageExtension')
		);
	}


	public function createService0420(): PHPStan\Rules\Classes\DuplicateDeclarationHelper
	{
		return new PHPStan\Rules\Classes\DuplicateDeclarationHelper;
	}


	public function createService0421(): PHPStan\Rules\Classes\PropertyTagCheck
	{
		return new PHPStan\Rules\Classes\PropertyTagCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getService('0445'),
			$this->getService('0467'),
			$this->getService('0458'),
			$this->getParameter('checkClassCaseSensitivity'),
			$this->getParameter('checkMissingTypehints'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0422(): PHPStan\Rules\Classes\LocalTypeAliasesCheck
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesCheck(
			$this->getParameter('typeAliases'),
			$this->getService('reflectionProvider'),
			$this->getService('0275'),
			$this->getService('0467'),
			$this->getService('0419'),
			$this->getService('0458'),
			$this->getService('0445'),
			$this->getParameter('checkMissingTypehints'),
			$this->getParameter('checkClassCaseSensitivity'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0423(): PHPStan\Rules\Classes\ConsistentConstructorHelper
	{
		return new PHPStan\Rules\Classes\ConsistentConstructorHelper;
	}


	public function createService0424(): PHPStan\Rules\Classes\MixinCheck
	{
		return new PHPStan\Rules\Classes\MixinCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getService('0445'),
			$this->getService('0467'),
			$this->getService('0458'),
			$this->getParameter('checkClassCaseSensitivity'),
			$this->getParameter('checkMissingTypehints'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0425(): PHPStan\Rules\Classes\MethodTagCheck
	{
		return new PHPStan\Rules\Classes\MethodTagCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getService('0445'),
			$this->getService('0467'),
			$this->getService('0458'),
			$this->getParameter('checkClassCaseSensitivity'),
			$this->getParameter('checkMissingTypehints'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0426(): PHPStan\Rules\Pure\FunctionPurityCheck
	{
		return new PHPStan\Rules\Pure\FunctionPurityCheck;
	}


	public function createService0427(): PHPStan\Rules\NullsafeCheck
	{
		return new PHPStan\Rules\NullsafeCheck;
	}


	public function createService0428(): PHPStan\Rules\RestrictedUsage\RestrictedUsageOfDeprecatedStringCastRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedUsageOfDeprecatedStringCastRule(
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedMethodUsageExtension'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0429(): PHPStan\Rules\RestrictedUsage\RestrictedFunctionCallableUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedFunctionCallableUsageRule(
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedFunctionUsageExtension'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0430(): PHPStan\Rules\RestrictedUsage\RestrictedMethodCallableUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedMethodCallableUsageRule(
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedMethodUsageExtension'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0431(): PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageRule(
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedMethodUsageExtension'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0432(): PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodCallableUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodCallableUsageRule(
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedMethodUsageExtension'),
			$this->getService('reflectionProvider'),
			$this->getService('0449')
		);
	}


	public function createService0433(): PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageRule(
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedClassConstantUsageExtension'),
			$this->getService('reflectionProvider'),
			$this->getService('0449')
		);
	}


	public function createService0434(): PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodUsageRule(
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedMethodUsageExtension'),
			$this->getService('reflectionProvider'),
			$this->getService('0449')
		);
	}


	public function createService0435(): PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageRule(
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedPropertyUsageExtension'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0436(): PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageRule(
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedFunctionUsageExtension'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0437(): PHPStan\Rules\RestrictedUsage\RestrictedStaticPropertyUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedStaticPropertyUsageRule(
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedPropertyUsageExtension'),
			$this->getService('reflectionProvider'),
			$this->getService('0449')
		);
	}


	public function createService0438(): PHPStan\Rules\DeadCode\PossiblyPureCallTransitivePurityResolver
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureCallTransitivePurityResolver($this->getService('reflectionProvider'));
	}


	public function createService0439(): PHPStan\Rules\NonStringableDynamicAccessCheck
	{
		return new PHPStan\Rules\NonStringableDynamicAccessCheck(
			$this->getService('0449'),
			$this->getParameter('featureToggles')['checkNonStringableDynamicAccess']
		);
	}


	public function createService0440(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck(
			$this->getService('0463'),
			$this->getParameter('checkAdvancedIsset'),
			$this->getParameter('treatPhpDocTypesAsCertain')
		);
	}


	public function createService0441(): PHPStan\Rules\Generics\MethodTagTemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\MethodTagTemplateTypeCheck($this->getService('026'), $this->getService('0446'));
	}


	public function createService0442(): PHPStan\Rules\Generics\CrossCheckInterfacesHelper
	{
		return new PHPStan\Rules\Generics\CrossCheckInterfacesHelper;
	}


	public function createService0443(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0445'),
			$this->getService('0444'),
			$this->getService('0458'),
			$this->getParameter('featureToggles')['skipCheckGenericClasses'],
			$this->getParameter('checkMissingTypehints')
		);
	}


	public function createService0444(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck;
	}


	public function createService0445(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService0446(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getService('0445'),
			$this->getService('023'),
			$this->getParameter('checkClassCaseSensitivity')
		);
	}


	public function createService0447(): PHPStan\Rules\ParameterCastableToStringCheck
	{
		return new PHPStan\Rules\ParameterCastableToStringCheck($this->getService('0449'));
	}


	public function createService0448(): PHPStan\Rules\ClassForbiddenNameCheck
	{
		return new PHPStan\Rules\ClassForbiddenNameCheck($this->getService('phpstan.extensionsCollection.PHPStan.Classes.ForbiddenClassNameExtension'));
	}


	public function createService0449(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper(
			$this->getService('reflectionProvider'),
			$this->getParameter('checkNullables'),
			$this->getParameter('checkThisOnly'),
			$this->getParameter('checkUnionTypes'),
			$this->getParameter('checkExplicitMixed'),
			$this->getParameter('checkImplicitMixed'),
			$this->getParameter('checkBenevolentUnionTypes'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0450(): PHPStan\Rules\Comparison\FunctionCallConstantConditionHelper
	{
		return new PHPStan\Rules\Comparison\FunctionCallConstantConditionHelper($this->getService('0237'), $this->getService('0293'));
	}


	public function createService0451(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			$this->getParameter('treatPhpDocTypesAsCertain')
		);
	}


	public function createService0452(): PHPStan\Rules\Comparison\PossiblyImpureTipHelper
	{
		return new PHPStan\Rules\Comparison\PossiblyImpureTipHelper($this->getParameter('tips')['possiblyImpure']);
	}


	public function createService0453(): PHPStan\Rules\Comparison\ConstantConditionInTraitHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionInTraitHelper($this->getService('0237'), $this->getService('0293'));
	}


	public function createService0454(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getParameter('treatPhpDocTypesAsCertain'));
	}


	public function createService0455(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getService('0458'),
			$this->getService('0499'),
			$this->getParameter('checkClassCaseSensitivity'),
			$this->getParameter('checkThisOnly'),
			$this->getParameter('featureToggles')['checkImportedClassNameCase']
		);
	}


	public function createService0456(): PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper(
			$this->getService('0275'),
			$this->getService('026'),
			$this->getService('reflectionProvider'),
			$this->getParameter('reportWrongPhpDocTypeInVarTag'),
			$this->getParameter('reportAnyTypeWideningInVarTag')
		);
	}


	public function createService0457(): PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper;
	}


	public function createService0458(): PHPStan\Rules\PhpDoc\UnresolvableTypeHelper
	{
		return new PHPStan\Rules\PhpDoc\UnresolvableTypeHelper;
	}


	public function createService0459(): PHPStan\Rules\PhpDoc\GenericCallableRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\GenericCallableRuleHelper($this->getService('0446'));
	}


	public function createService0460(): PHPStan\Rules\PhpDoc\AssertRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\AssertRuleHelper(
			$this->getService('reflectionProvider'),
			$this->getService('0458'),
			$this->getService('0419'),
			$this->getService('0467'),
			$this->getService('0445'),
			$this->getParameter('checkClassCaseSensitivity'),
			$this->getParameter('checkMissingTypehints')
		);
	}


	public function createService0461(): PHPStan\Rules\PhpDoc\RequireExtendsCheck
	{
		return new PHPStan\Rules\PhpDoc\RequireExtendsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getParameter('checkClassCaseSensitivity'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0462(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck(
			$this->getService('0445'),
			$this->getService('0458'),
			$this->getService('0459')
		);
	}


	public function createService0463(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService0464(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService0465(): PHPStan\Rules\Properties\AccessPropertiesCheck
	{
		return new PHPStan\Rules\Properties\AccessPropertiesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0449'),
			$this->getService('0499'),
			$this->getService('0439'),
			$this->getParameter('reportMagicProperties'),
			$this->getParameter('checkDynamicProperties')
		);
	}


	public function createService0466(): PHPStan\Rules\Properties\AccessStaticPropertiesCheck
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0449'),
			$this->getService('0419'),
			$this->getService('0499'),
			$this->getService('0439'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0467(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck(
			$this->getParameter('checkMissingCallableSignature'),
			$this->getParameter('featureToggles')['skipCheckGenericClasses'],
			$this->getParameter('featureToggles')['checkGenericIterableClasses']
		);
	}


	public function createService0468(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('0449'));
	}


	public function createService0469(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule(
			$this->getService('0472'),
			$this->getParameter('reportMaybesInMethodSignatures'),
			$this->getParameter('reportStaticMethodSignatures'),
			$this->getParameter('featureToggles')['reportMethodPurityOverride']
		);
	}


	public function createService0470(): PHPStan\Rules\Methods\StaticMethodCallCheck
	{
		return new PHPStan\Rules\Methods\StaticMethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0449'),
			$this->getService('0419'),
			$this->getParameter('checkFunctionNameCase'),
			$this->getParameter('tips')['discoveringSymbols'],
			$this->getParameter('reportMagicMethods')
		);
	}


	public function createService0471(): PHPStan\Rules\Methods\MethodPrototypeFinder
	{
		return new PHPStan\Rules\Methods\MethodPrototypeFinder($this->getService('0499'), $this->getService('0522'));
	}


	public function createService0472(): PHPStan\Rules\Methods\ParentMethodHelper
	{
		return new PHPStan\Rules\Methods\ParentMethodHelper($this->getService('0522'));
	}


	public function createService0473(): PHPStan\Rules\Methods\MethodParameterComparisonHelper
	{
		return new PHPStan\Rules\Methods\MethodParameterComparisonHelper($this->getService('0499'));
	}


	public function createService0474(): PHPStan\Rules\Methods\MethodVisibilityComparisonHelper
	{
		return new PHPStan\Rules\Methods\MethodVisibilityComparisonHelper;
	}


	public function createService0475(): PHPStan\Rules\Methods\MethodCallCheck
	{
		return new PHPStan\Rules\Methods\MethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0449'),
			$this->getParameter('checkFunctionNameCase'),
			$this->getParameter('reportMagicMethods')
		);
	}


	public function createService0476(): PHPStan\Rules\Api\ApiRuleHelper
	{
		return new PHPStan\Rules\Api\ApiRuleHelper;
	}


	public function createService0477(): PHPStan\Rules\Exceptions\TooWideThrowTypeCheck
	{
		return new PHPStan\Rules\Exceptions\TooWideThrowTypeCheck($this->getParameter('exceptions')['implicitThrows']);
	}


	public function createService0478(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck($this->getService('exceptionTypeResolver'));
	}


	public function createService0479(): PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver
	{
		return new PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver(
			$this->getService('reflectionProvider'),
			$this->getParameter('exceptions')['uncheckedExceptionRegexes'],
			$this->getParameter('exceptions')['uncheckedExceptionClasses'],
			$this->getParameter('exceptions')['checkedExceptionRegexes'],
			$this->getParameter('exceptions')['checkedExceptionClasses']
		);
	}


	public function createService0480(): PHPStan\Rules\Debug\DumpNativeTypeRule
	{
		return new PHPStan\Rules\Debug\DumpNativeTypeRule($this->getService('reflectionProvider'));
	}


	public function createService0481(): PHPStan\Rules\Debug\FileAssertRule
	{
		return new PHPStan\Rules\Debug\FileAssertRule($this->getService('reflectionProvider'), $this->getService('0269'));
	}


	public function createService0482(): PHPStan\Rules\Debug\DebugScopeRule
	{
		return new PHPStan\Rules\Debug\DebugScopeRule($this->getService('reflectionProvider'));
	}


	public function createService0483(): PHPStan\Rules\Debug\DumpTypeRule
	{
		return new PHPStan\Rules\Debug\DumpTypeRule($this->getService('reflectionProvider'));
	}


	public function createService0484(): PHPStan\Rules\Debug\DumpPhpDocTypeRule
	{
		return new PHPStan\Rules\Debug\DumpPhpDocTypeRule($this->getService('reflectionProvider'), $this->getService('0877'));
	}


	public function createService0485(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck(
			$this->getService('0449'),
			$this->getService('0427'),
			$this->getService('0458'),
			$this->getService('0464'),
			$this->getService('reflectionProvider'),
			$this->getParameter('checkFunctionArgumentTypes'),
			$this->getParameter('checkArgumentsPassedByReference'),
			$this->getParameter('checkExtraArguments'),
			$this->getParameter('checkMissingTypehints')
		);
	}


	public function createService0486(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck(
			$this->getService('reflectionProvider'),
			$this->getParameter('featureToggles')['reportPreciseLineForUnusedFunctionParameter']
		);
	}


	public function createService0487(): PHPStan\Rules\InternalTag\RestrictedInternalUsageHelper
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalUsageHelper;
	}


	public function createService0488(): PHPStan\Rules\AttributesCheck
	{
		return new PHPStan\Rules\AttributesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0485'),
			$this->getService('0419'),
			$this->getParameter('deprecationRulesInstalled')
		);
	}


	public function createService0489(): PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck($this->getService('0490'));
	}


	public function createService0490(): PHPStan\Rules\TooWideTypehints\TooWideTypeCheck
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideTypeCheck(
			$this->getService('0464'),
			$this->getParameter('featureToggles')['reportTooWideBool'],
			$this->getParameter('featureToggles')['reportNestedTooWideType']
		);
	}


	public function createService0491(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService0492(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('0408'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService0493(): PHPStan\Parallel\WorkerRunner
	{
		return new PHPStan\Parallel\WorkerRunner(
			$this->getService('015'),
			$this->getService('0291'),
			$this->getService('registry'),
			$this->getService('06'),
			$this->getService('0290'),
			$this->getParameter('parallel')['buffer']
		);
	}


	public function createService0494(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(
			$this->getParameter('internalErrorsCountLimit'),
			$this->getParameter('parallel')['processTimeout'],
			$this->getParameter('parallel')['buffer'],
			$this->getService('0496'),
			$this->getService('0533'),
			$this->getService('0493')
		);
	}


	public function createService0495(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(
			$this->getParameter('parallel')['jobSize'],
			$this->getParameter('parallel')['maximumNumberOfProcesses'],
			$this->getParameter('parallel')['minimumNumberOfJobsPerProcess']
		);
	}


	public function createService0496(): PHPStan\Parallel\ForkParallelChecker
	{
		return new PHPStan\Parallel\ForkParallelChecker;
	}


	public function createService0497(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(
			$this->getParameter('phpVersion'),
			$this->getParameter('composerAutoloaderProjectPaths')
		);
	}


	public function createService0498(): PHPStan\Php\ComposerPhpVersionFactory
	{
		return new PHPStan\Php\ComposerPhpVersionFactory($this->getParameter('composerAutoloaderProjectPaths'));
	}


	public function createService0499(): PHPStan\Php\PhpVersion
	{
		return $this->getService('0501')->create();
	}


	public function createService0500(): PHPStan\Php\ConfiguredPhpVersionRangeHelper
	{
		return new PHPStan\Php\ConfiguredPhpVersionRangeHelper($this->getParameter('phpVersion'), $this->getService('0498'));
	}


	public function createService0501(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('0497')->create();
	}


	public function createService0502(): PHPStan\Reflection\ParameterAllowedConstantsMapProvider
	{
		return new PHPStan\Reflection\ParameterAllowedConstantsMapProvider;
	}


	public function createService0503(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension($this->getParameter('mixinExcludeClasses'));
	}


	public function createService0504(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension($this->getParameter('mixinExcludeClasses'));
	}


	public function createService0505(): PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension;
	}


	public function createService0506(): PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension;
	}


	public function createService0507(): PHPStan\Reflection\Deprecation\DeprecationProvider
	{
		return new PHPStan\Reflection\Deprecation\DeprecationProvider(
			$this->getService('phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.ClassDeprecationExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.ClassConstantDeprecationExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.ConstantDeprecationExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.EnumCaseDeprecationExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.FunctionDeprecationExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.MethodDeprecationExtension'),
			$this->getService('phpstan.extensionsCollection.PHPStan.Reflection.Deprecation.PropertyDeprecationExtension')
		);
	}


	public function createService0508(): PHPStan\Reflection\AttributeReflectionFactory
	{
		return new PHPStan\Reflection\AttributeReflectionFactory($this->getService('0538'), $this->getService('0518'));
	}


	public function createService0509(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('0269'));
	}


	public function createService0510(): PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider(
			$this->getService('0512'),
			$this->getService('0535'),
			$this->getService('026'),
			$this->getService('0499'),
			$this->getService('0538'),
			$this->getService('0518')
		);
	}


	public function createService0511(): PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory(
			$this->getService('0499'),
			$this->getService('0512'),
			$this->getService('0510')
		);
	}


	public function createService0512(): PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider(
			$this->getService('0509'),
			$this->getService('0538'),
			$this->getService('0499'),
			$this->getParameter('featureToggles')['stricterFunctionMap']
		);
	}


	public function createService0513(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return $this->getService('0511')->create();
	}


	public function createService0514(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider(
			$this->getService('0513'),
			$this->getService('betterReflectionReflector'),
			$this->getService('026'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0508'),
			$this->getService('0502')
		);
	}


	public function createService0515(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService0516(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService0517(): PHPStan\Reflection\ConstructorsHelper
	{
		return new PHPStan\Reflection\ConstructorsHelper(
			$this->getService('phpstan.extensionsCollection.PHPStan.Reflection.AdditionalConstructorsExtension'),
			$this->getParameter('additionalConstructors')
		);
	}


	public function createService0518(): PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('0406'));
	}


	public function createService0519(): PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension;
	}


	public function createService0520(): PHPStan\Reflection\Php\SealedAllowedSubTypesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\SealedAllowedSubTypesClassReflectionExtension;
	}


	public function createService0521(): PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension;
	}


	public function createService0522(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('0285'),
			$this->getService('0288'),
			$this->getService('0543'),
			$this->getService('0264'),
			$this->getService('0507'),
			$this->getService('0515'),
			$this->getService('0516'),
			$this->getService('0513'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0518'),
			$this->getService('026'),
			$this->getService('0508'),
			$this->getService('0502'),
			$this->getParameter('inferPrivatePropertyTypeFromConstructor'),
			$this->getService('0499'),
			$this->getParameter('cache')['memberCacheKeysMax']
		);
	}


	public function createService0523(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(
			$this->getService('reflectionProvider'),
			$this->getParameter('universalObjectCratesClasses'),
			$this->getService('0516')
		);
	}


	public function createService0524(): PHPStan\Reflection\BetterReflection\SourceStubber\ExtensionVersionProvider
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\ExtensionVersionProvider($this->getParameter('composerAutoloaderProjectPaths'));
	}


	public function createService0525(): PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory(
			$this->getService('php8PhpParser'),
			$this->getService('0236'),
			$this->getService('0499'),
			$this->getParameter('cache')['phpStormStubsNodesCountMax'],
			$this->getService('0524')
		);
	}


	public function createService0526(): PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory(
			$this->getService('0236'),
			$this->getService('0499')
		);
	}


	public function createService0527(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension($this->getService('0499'));
	}


	public function createService0528(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService0529(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('0532'));
	}


	public function createService0530(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('0545'));
	}


	public function createService0531(): PHPStan\Reflection\BetterReflection\SourceLocator\PhpFileCleaner
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\PhpFileCleaner;
	}


	public function createService0532(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory(
			$this->getService('0535'),
			$this->getService('fileFinderScan'),
			$this->getService('0499'),
			$this->getService('0534'),
			$this->getService('0491'),
			$this->getService('0413'),
			$this->getService('0496'),
			$this->getParameter('tmpDir')
		);
	}


	public function createService0533(): PHPStan\Reflection\BetterReflection\SourceLocator\PreForkDirectorySymbolScanner
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\PreForkDirectorySymbolScanner(
			$this->getService('0536'),
			$this->getService('0529'),
			$this->getService('0532'),
			$this->getParameter('composerAutoloaderProjectPaths'),
			$this->getParameter('analysedPaths'),
			$this->getParameter('analysedPathsFromConfig'),
			$this->getParameter('scanDirectories')
		);
	}


	public function createService0534(): PHPStan\Reflection\BetterReflection\SourceLocator\SymbolFinderInFiles
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\SymbolFinderInFiles($this->getService('0531'));
	}


	public function createService0535(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('0528'),
			$this->getService('defaultAnalysisParser')
		);
	}


	public function createService0536(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('0529'),
			$this->getService('0546'),
			$this->getService('0532'),
			$this->getService('0499')
		);
	}


	public function createService0537(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('php8PhpParser'),
			$this->getService('0491'),
			$this->getService('0408'),
			$this->getService('0499'),
			$this->getService('0878'),
			$this->getService('0524'),
			$this->getService('0879'),
			$this->getService('0530'),
			$this->getService('0529'),
			$this->getService('0536'),
			$this->getService('0546'),
			$this->getService('0535'),
			$this->getParameter('scanFiles'),
			$this->getParameter('scanDirectories'),
			$this->getParameter('analysedPaths'),
			$this->getParameter('composerAutoloaderProjectPaths'),
			$this->getParameter('analysedPathsFromConfig'),
			$this->getParameter('sourceLocatorPlaygroundMode'),
			$this->getParameter('singleReflectionFile')
		);
	}


	public function createService0538(): PHPStan\Reflection\InitializerExprTypeResolver
	{
		return new PHPStan\Reflection\InitializerExprTypeResolver(
			$this->getService('0279'),
			$this->getService('0518'),
			$this->getService('0499'),
			$this->getService('0235'),
			$this->getService('027'),
			$this->getService('022'),
			$this->getParameter('usePathConstantsAsConstantString')
		);
	}


	public function createService0539(): PHPStan\Analyser\InternalScopeFactoryFactory
	{
		return new class ($this) implements PHPStan\Analyser\InternalScopeFactoryFactory {
			private $container;


			public function __construct(Container_db862b19d0 $container)
			{
				$this->container = $container;
			}


			public function create(?callable $nodeCallback): PHPStan\Analyser\InternalScopeFactory
			{
				return new PHPStan\Analyser\LazyInternalScopeFactory($this->container->getService('0406'), $nodeCallback);
			}
		};
	}


	public function createService0540(): PHPStan\Analyser\ExpressionResultFactory
	{
		return new class ($this) implements PHPStan\Analyser\ExpressionResultFactory {
			private $container;


			public function __construct(Container_db862b19d0 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Analyser\MutatingScope $scope,
				PHPStan\Analyser\MutatingScope $beforeScope,
				PhpParser\Node\Expr $expr,
				bool $hasYield,
				bool $isAlwaysTerminating,
				array $throwPoints,
				array $impurePoints,
				bool $containsNullsafe = false,
				?PHPStan\Analyser\IssetabilityDescriptor $issetabilityDescriptor = null,
				?callable $truthyScopeCallback = null,
				?callable $falseyScopeCallback = null
			): PHPStan\Analyser\ExpressionResult {
				return new PHPStan\Analyser\ExpressionResult(
					$scope,
					$beforeScope,
					$expr,
					$hasYield,
					$isAlwaysTerminating,
					$throwPoints,
					$impurePoints,
					$containsNullsafe,
					$issetabilityDescriptor,
					$truthyScopeCallback,
					$falseyScopeCallback
				);
			}
		};
	}


	public function createService0541(): PHPStan\Analyser\ResultCache\ResultCacheManagerFactory
	{
		return new class ($this) implements PHPStan\Analyser\ResultCache\ResultCacheManagerFactory {
			private $container;


			public function __construct(Container_db862b19d0 $container)
			{
				$this->container = $container;
			}


			public function create(array $fileReplacements): PHPStan\Analyser\ResultCache\ResultCacheManager
			{
				return new PHPStan\Analyser\ResultCache\ResultCacheManager(
					$this->container->getService('phpstan.extensionsCollection.PHPStan.Analyser.ResultCache.ResultCacheMetaExtension'),
					$this->container->getService('07'),
					$this->container->getService('fileFinderScan'),
					$this->container->getService('0266'),
					$this->container->getService('0408'),
					$this->container->getService('011'),
					$this->container->getService('0524'),
					$this->container->getParameter('resultCachePath'),
					$this->container->getParameter('analysedPaths'),
					$this->container->getParameter('analysedPathsFromConfig'),
					$this->container->getParameter('composerAutoloaderProjectPaths'),
					$this->container->getParameter('usedLevel'),
					$this->container->getParameter('cliAutoloadFile'),
					$this->container->getParameter('bootstrapFiles'),
					$this->container->getParameter('scanFiles'),
					$this->container->getParameter('scanDirectories'),
					$this->container->getParameter('stubFiles'),
					$fileReplacements,
					$this->container->getParameter('resultCacheChecksProjectExtensionFilesDependencies'),
					$this->container->getParameter('parametersNotInvalidatingCache'),
					$this->container->getParameter('resultCacheSkipIfOlderThanDays'),
					$this->container->getParameter('rootDir'),
					$this->container->getService('0499'),
					$this->container->getService('0498')
				);
			}
		};
	}


	public function createService0542(): PHPStan\File\FileExcluderRawFactory
	{
		return new class ($this) implements PHPStan\File\FileExcluderRawFactory {
			private $container;


			public function __construct(Container_db862b19d0 $container)
			{
				$this->container = $container;
			}


			public function create(array $analyseExcludes): PHPStan\File\FileExcluder
			{
				return new PHPStan\File\FileExcluder($this->container->getService('0408'), $analyseExcludes);
			}
		};
	}


	public function createService0543(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_db862b19d0 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\BetterReflection\Reflection\Adapter\ReflectionMethod $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?PHPStan\PhpDoc\ResolvedPhpDocBlock $resolvedPhpDocBlock,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				?PHPStan\Type\Type $selfOutType,
				?string $phpDocComment,
				array $phpDocParameterOutTypes,
				array $immediatelyInvokedCallableParameters,
				array $phpDocClosureThisTypeParameters,
				bool $acceptsNamedArguments,
				array $attributes,
				array $pureUnlessCallableIsImpureParameters
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$this->container->getService('0538'),
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('0508'),
					$this->container->getService('0502'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$resolvedPhpDocBlock,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$isPure,
					$asserts,
					$acceptsNamedArguments,
					$selfOutType,
					$phpDocComment,
					$phpDocParameterOutTypes,
					$immediatelyInvokedCallableParameters,
					$phpDocClosureThisTypeParameters,
					$attributes,
					$pureUnlessCallableIsImpureParameters
				);
			}
		};
	}


	public function createService0544(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_db862b19d0 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\BetterReflection\Reflection\Adapter\ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				?string $filename,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				bool $acceptsNamedArguments,
				?string $phpDocComment,
				array $phpDocParameterOutTypes,
				array $phpDocParameterImmediatelyInvokedCallable,
				array $phpDocParameterClosureThisTypes,
				array $attributes,
				array $phpDocParameterPureUnlessCallableIsImpure
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$this->container->getService('0538'),
					$reflection,
					$this->container->getService('0508'),
					$this->container->getService('0502'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$filename,
					$isPure,
					$asserts,
					$acceptsNamedArguments,
					$phpDocComment,
					$phpDocParameterOutTypes,
					$phpDocParameterImmediatelyInvokedCallable,
					$phpDocParameterClosureThisTypes,
					$attributes,
					$phpDocParameterPureUnlessCallableIsImpure
				);
			}
		};
	}


	public function createService0545(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_db862b19d0 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('0535'),
					$this->container->getService('0491'),
					$this->container->getService('0499'),
					$fileName
				);
			}
		};
	}


	public function createService0546(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_db862b19d0 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('0530'));
			}
		};
	}


	public function createService0547(): PHPStan\Reflection\ClassReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\ClassReflectionFactory {
			private $container;


			public function __construct(Container_db862b19d0 $container)
			{
				$this->container = $container;
			}


			public function create(
				string $displayName,
				ReflectionClass $reflection,
				?string $anonymousFilename,
				?PHPStan\Type\Generic\TemplateTypeMap $resolvedTemplateTypeMap,
				?Closure $stubPhpDocBlockCallback,
				?string $extraCacheKey = null,
				?PHPStan\Type\Generic\TemplateTypeVarianceMap $resolvedCallSiteVarianceMap = null,
				?bool $finalByKeywordOverride = null
			): PHPStan\Reflection\ClassReflection {
				return new PHPStan\Reflection\ClassReflection(
					$this->container->getService('0547'),
					$this->container->getService('reflectionProvider'),
					$this->container->getService('0538'),
					$this->container->getService('026'),
					$this->container->getService('stubPhpDocProvider'),
					$this->container->getService('0264'),
					$this->container->getService('0499'),
					$this->container->getService('0513'),
					$this->container->getService('0507'),
					$this->container->getService('0508'),
					$this->container->getService('0407'),
					$displayName,
					$reflection,
					$anonymousFilename,
					$resolvedTemplateTypeMap,
					$stubPhpDocBlockCallback,
					$extraCacheKey,
					$resolvedCallSiteVarianceMap,
					$finalByKeywordOverride
				);
			}
		};
	}


	public function createService0548(): PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getParameter('checkFunctionNameCase'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0549(): PHPStan\Rules\Namespaces\ExistingNamesInUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getParameter('checkFunctionNameCase'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0550(): PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule(
			$this->getService('0449'),
			$this->getService('0499'),
			$this->getParameter('reportMaybes'),
			$this->getParameter('reportNonIntStringArrayKey')
		);
	}


	public function createService0551(): PHPStan\Rules\Arrays\OffsetAccessAssignOpRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignOpRule($this->getService('0449'));
	}


	public function createService0552(): PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule
	{
		return new PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule($this->getService('0237'), $this->getService('029'));
	}


	public function createService0553(): PHPStan\Rules\Arrays\OffsetAccessAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignmentRule($this->getService('0449'));
	}


	public function createService0554(): PHPStan\Rules\Arrays\ArrayUnpackingRule
	{
		return new PHPStan\Rules\Arrays\ArrayUnpackingRule($this->getService('0499'), $this->getService('0449'));
	}


	public function createService0555(): PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule;
	}


	public function createService0556(): PHPStan\Rules\Arrays\IterableInForeachRule
	{
		return new PHPStan\Rules\Arrays\IterableInForeachRule($this->getService('0449'));
	}


	public function createService0557(): PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule($this->getService('0449'));
	}


	public function createService0558(): PHPStan\Rules\Arrays\DeadForeachRule
	{
		return new PHPStan\Rules\Arrays\DeadForeachRule;
	}


	public function createService0559(): PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule(
			$this->getService('0449'),
			$this->getService('0499'),
			$this->getParameter('reportNonIntStringArrayKey')
		);
	}


	public function createService0560(): PHPStan\Rules\Arrays\ArrayDestructuringRule
	{
		return new PHPStan\Rules\Arrays\ArrayDestructuringRule($this->getService('0449'), $this->getService('0416'));
	}


	public function createService0561(): PHPStan\Rules\Arrays\UnpackIterableInArrayRule
	{
		return new PHPStan\Rules\Arrays\UnpackIterableInArrayRule($this->getService('0449'));
	}


	public function createService0562(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule(
			$this->getService('0449'),
			$this->getService('0416'),
			$this->getParameter('reportMaybes')
		);
	}


	public function createService0563(): PHPStan\Rules\Operators\InvalidUnaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidUnaryOperationRule($this->getService('0449'));
	}


	public function createService0564(): PHPStan\Rules\Operators\InvalidAssignVarRule
	{
		return new PHPStan\Rules\Operators\InvalidAssignVarRule($this->getService('0427'));
	}


	public function createService0565(): PHPStan\Rules\Operators\BacktickRule
	{
		return new PHPStan\Rules\Operators\BacktickRule($this->getService('0499'));
	}


	public function createService0566(): PHPStan\Rules\Operators\InvalidIncDecOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidIncDecOperationRule($this->getService('0449'), $this->getService('0499'));
	}


	public function createService0567(): PHPStan\Rules\Operators\InvalidComparisonOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidComparisonOperationRule(
			$this->getService('0449'),
			$this->getService('0235'),
			$this->getParameter('featureToggles')['checkExtensionsForComparisonOperators']
		);
	}


	public function createService0568(): PHPStan\Rules\Operators\InvalidBinaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidBinaryOperationRule($this->getService('0237'), $this->getService('0449'));
	}


	public function createService0569(): PHPStan\Rules\Operators\PipeOperatorRule
	{
		return new PHPStan\Rules\Operators\PipeOperatorRule($this->getService('0449'));
	}


	public function createService0570(): PHPStan\Rules\Variables\ThisInStaticStatementRule
	{
		return new PHPStan\Rules\Variables\ThisInStaticStatementRule;
	}


	public function createService0571(): PHPStan\Rules\Variables\InvalidVariableAssignRule
	{
		return new PHPStan\Rules\Variables\InvalidVariableAssignRule;
	}


	public function createService0572(): PHPStan\Rules\Variables\NullCoalesceRule
	{
		return new PHPStan\Rules\Variables\NullCoalesceRule(
			$this->getService('0440'),
			$this->getService('0453'),
			$this->getParameter('featureToggles')['unnecessaryNullCoalesce']
		);
	}


	public function createService0573(): PHPStan\Rules\Variables\ParameterOutExecutionEndTypeRule
	{
		return new PHPStan\Rules\Variables\ParameterOutExecutionEndTypeRule($this->getService('0418'));
	}


	public function createService0574(): PHPStan\Rules\Variables\ThisInGlobalStatementRule
	{
		return new PHPStan\Rules\Variables\ThisInGlobalStatementRule;
	}


	public function createService0575(): PHPStan\Rules\Variables\EmptyRule
	{
		return new PHPStan\Rules\Variables\EmptyRule($this->getService('0440'), $this->getService('0453'));
	}


	public function createService0576(): PHPStan\Rules\Variables\DefinedVariableRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableRule(
			$this->getService('0439'),
			$this->getParameter('cliArgumentsVariablesRegistered'),
			$this->getParameter('checkMaybeUndefinedVariables')
		);
	}


	public function createService0577(): PHPStan\Rules\Variables\ParameterOutAssignedTypeRule
	{
		return new PHPStan\Rules\Variables\ParameterOutAssignedTypeRule($this->getService('0418'));
	}


	public function createService0578(): PHPStan\Rules\Variables\CompactVariablesRule
	{
		return new PHPStan\Rules\Variables\CompactVariablesRule($this->getParameter('checkMaybeUndefinedVariables'));
	}


	public function createService0579(): PHPStan\Rules\Variables\UnsetRule
	{
		return new PHPStan\Rules\Variables\UnsetRule($this->getService('0464'), $this->getService('0499'));
	}


	public function createService0580(): PHPStan\Rules\Variables\IssetRule
	{
		return new PHPStan\Rules\Variables\IssetRule($this->getService('0440'), $this->getService('0453'));
	}


	public function createService0581(): PHPStan\Rules\Variables\VariableCloningRule
	{
		return new PHPStan\Rules\Variables\VariableCloningRule($this->getService('0449'));
	}


	public function createService0582(): PHPStan\Rules\Constants\FinalConstantRule
	{
		return new PHPStan\Rules\Constants\FinalConstantRule($this->getService('0499'));
	}


	public function createService0583(): PHPStan\Rules\Constants\FinalPrivateConstantRule
	{
		return new PHPStan\Rules\Constants\FinalPrivateConstantRule;
	}


	public function createService0584(): PHPStan\Rules\Constants\ConstantRule
	{
		return new PHPStan\Rules\Constants\ConstantRule($this->getParameter('tips')['discoveringSymbols']);
	}


	public function createService0585(): PHPStan\Rules\Constants\NativeTypedClassConstantRule
	{
		return new PHPStan\Rules\Constants\NativeTypedClassConstantRule($this->getService('0499'));
	}


	public function createService0586(): PHPStan\Rules\Constants\OverridingConstantRule
	{
		return new PHPStan\Rules\Constants\OverridingConstantRule($this->getParameter('checkPhpDocMethodSignatures'));
	}


	public function createService0587(): PHPStan\Rules\Constants\DynamicClassConstantFetchRule
	{
		return new PHPStan\Rules\Constants\DynamicClassConstantFetchRule($this->getService('0499'), $this->getService('0449'));
	}


	public function createService0588(): PHPStan\Rules\Constants\MissingClassConstantTypehintRule
	{
		return new PHPStan\Rules\Constants\MissingClassConstantTypehintRule($this->getService('0467'));
	}


	public function createService0589(): PHPStan\Rules\Constants\MagicConstantContextRule
	{
		return new PHPStan\Rules\Constants\MagicConstantContextRule;
	}


	public function createService0590(): PHPStan\Rules\Constants\ValueAssignedToClassConstantRule
	{
		return new PHPStan\Rules\Constants\ValueAssignedToClassConstantRule(
			$this->getService('0279'),
			$this->getParameter('featureToggles')['checkDynamicConstantNameValues']
		);
	}


	public function createService0591(): PHPStan\Rules\Constants\ClassAsClassConstantRule
	{
		return new PHPStan\Rules\Constants\ClassAsClassConstantRule;
	}


	public function createService0592(): PHPStan\Rules\Constants\ConstantAttributesRule
	{
		return new PHPStan\Rules\Constants\ConstantAttributesRule($this->getService('0488'), $this->getService('0499'));
	}


	public function createService0593(): PHPStan\Rules\DateTimeInstantiationRule
	{
		return new PHPStan\Rules\DateTimeInstantiationRule;
	}


	public function createService0594(): PHPStan\Rules\Classes\MethodTagTraitRule
	{
		return new PHPStan\Rules\Classes\MethodTagTraitRule($this->getService('0425'), $this->getService('reflectionProvider'));
	}


	public function createService0595(): PHPStan\Rules\Classes\InstantiationCallableRule
	{
		return new PHPStan\Rules\Classes\InstantiationCallableRule;
	}


	public function createService0596(): PHPStan\Rules\Classes\RequireExtendsRule
	{
		return new PHPStan\Rules\Classes\RequireExtendsRule;
	}


	public function createService0597(): PHPStan\Rules\Classes\NonClassAttributeClassRule
	{
		return new PHPStan\Rules\Classes\NonClassAttributeClassRule;
	}


	public function createService0598(): PHPStan\Rules\Classes\ExistingClassInTraitUseRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInTraitUseRule(
			$this->getService('0419'),
			$this->getService('reflectionProvider'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0599(): PHPStan\Rules\Classes\MixinRule
	{
		return new PHPStan\Rules\Classes\MixinRule($this->getService('0424'));
	}


	public function createService0600(): PHPStan\Rules\Classes\AllowedSubTypesRule
	{
		return new PHPStan\Rules\Classes\AllowedSubTypesRule;
	}


	public function createService0601(): PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule(
			$this->getService('0419'),
			$this->getService('reflectionProvider'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0602(): PHPStan\Rules\Classes\LocalTypeTraitUseAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeTraitUseAliasesRule($this->getService('0422'));
	}


	public function createService0603(): PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule
	{
		return new PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule;
	}


	public function createService0604(): PHPStan\Rules\Classes\DuplicateDeclarationRule
	{
		return new PHPStan\Rules\Classes\DuplicateDeclarationRule($this->getService('0420'));
	}


	public function createService0605(): PHPStan\Rules\Classes\PropertyTagTraitUseRule
	{
		return new PHPStan\Rules\Classes\PropertyTagTraitUseRule($this->getService('0421'));
	}


	public function createService0606(): PHPStan\Rules\Classes\LocalTypeAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesRule($this->getService('0422'));
	}


	public function createService0607(): PHPStan\Rules\Classes\MixinTraitUseRule
	{
		return new PHPStan\Rules\Classes\MixinTraitUseRule($this->getService('0424'));
	}


	public function createService0608(): PHPStan\Rules\Classes\PropertyTagRule
	{
		return new PHPStan\Rules\Classes\PropertyTagRule($this->getService('0421'));
	}


	public function createService0609(): PHPStan\Rules\Classes\ExistingClassInClassExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInClassExtendsRule(
			$this->getService('0419'),
			$this->getService('reflectionProvider'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0610(): PHPStan\Rules\Classes\PropertyTagTraitRule
	{
		return new PHPStan\Rules\Classes\PropertyTagTraitRule($this->getService('0421'), $this->getService('reflectionProvider'));
	}


	public function createService0611(): PHPStan\Rules\Classes\ClassConstantAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassConstantAttributesRule($this->getService('0488'));
	}


	public function createService0612(): PHPStan\Rules\Classes\MixinTraitRule
	{
		return new PHPStan\Rules\Classes\MixinTraitRule($this->getService('0424'), $this->getService('reflectionProvider'));
	}


	public function createService0613(): PHPStan\Rules\Classes\ExistingClassInInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInInstanceOfRule(
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getParameter('checkClassCaseSensitivity'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0614(): PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule(
			$this->getService('0419'),
			$this->getService('reflectionProvider'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0615(): PHPStan\Rules\Classes\ImpossibleInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ImpossibleInstanceOfRule(
			$this->getService('0449'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('reportAlwaysTrueInLastCondition'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0616(): PHPStan\Rules\Classes\EnumSanityRule
	{
		return new PHPStan\Rules\Classes\EnumSanityRule($this->getService('0538'));
	}


	public function createService0617(): PHPStan\Rules\Classes\NewStaticRule
	{
		return new PHPStan\Rules\Classes\NewStaticRule($this->getService('0499'), $this->getService('0423'));
	}


	public function createService0618(): PHPStan\Rules\Classes\ReadOnlyClassRule
	{
		return new PHPStan\Rules\Classes\ReadOnlyClassRule($this->getService('0499'));
	}


	public function createService0619(): PHPStan\Rules\Classes\InstantiationRule
	{
		return new PHPStan\Rules\Classes\InstantiationRule(
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.RestrictedUsage.RestrictedMethodUsageExtension'),
			$this->getService('reflectionProvider'),
			$this->getService('0485'),
			$this->getService('0419'),
			$this->getService('0449'),
			$this->getService('0423'),
			$this->getParameter('featureToggles')['newOnNonObject'],
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0620(): PHPStan\Rules\Classes\UnusedConstructorParametersRule
	{
		return new PHPStan\Rules\Classes\UnusedConstructorParametersRule($this->getService('0486'));
	}


	public function createService0621(): PHPStan\Rules\Classes\ClassConstantRule
	{
		return new PHPStan\Rules\Classes\ClassConstantRule(
			$this->getService('reflectionProvider'),
			$this->getService('0449'),
			$this->getService('0419'),
			$this->getService('0499'),
			$this->getService('0439')
		);
	}


	public function createService0622(): PHPStan\Rules\Classes\ClassAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassAttributesRule($this->getService('0488'));
	}


	public function createService0623(): PHPStan\Rules\Classes\RequireImplementsRule
	{
		return new PHPStan\Rules\Classes\RequireImplementsRule;
	}


	public function createService0624(): PHPStan\Rules\Classes\LocalTypeTraitAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeTraitAliasesRule($this->getService('0422'), $this->getService('reflectionProvider'));
	}


	public function createService0625(): PHPStan\Rules\Classes\TraitAttributeClassRule
	{
		return new PHPStan\Rules\Classes\TraitAttributeClassRule;
	}


	public function createService0626(): PHPStan\Rules\Classes\MethodTagRule
	{
		return new PHPStan\Rules\Classes\MethodTagRule($this->getService('0425'));
	}


	public function createService0627(): PHPStan\Rules\Classes\MethodTagTraitUseRule
	{
		return new PHPStan\Rules\Classes\MethodTagTraitUseRule($this->getService('0425'));
	}


	public function createService0628(): PHPStan\Rules\Classes\InvalidPromotedPropertiesRule
	{
		return new PHPStan\Rules\Classes\InvalidPromotedPropertiesRule($this->getService('0499'));
	}


	public function createService0629(): PHPStan\Rules\Classes\DuplicateTraitDeclarationRule
	{
		return new PHPStan\Rules\Classes\DuplicateTraitDeclarationRule($this->getService('0420'));
	}


	public function createService0630(): PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule(
			$this->getService('0419'),
			$this->getService('reflectionProvider'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0631(): PHPStan\Rules\Pure\PureFunctionRule
	{
		return new PHPStan\Rules\Pure\PureFunctionRule($this->getService('0426'));
	}


	public function createService0632(): PHPStan\Rules\Pure\PureMethodRule
	{
		return new PHPStan\Rules\Pure\PureMethodRule($this->getService('0426'));
	}


	public function createService0633(): PHPStan\Rules\Pure\PurePropertyHookRule
	{
		return new PHPStan\Rules\Pure\PurePropertyHookRule($this->getService('0426'));
	}


	public function createService0634(): PHPStan\Rules\Traits\ConflictingTraitConstantsRule
	{
		return new PHPStan\Rules\Traits\ConflictingTraitConstantsRule(
			$this->getService('0538'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0635(): PHPStan\Rules\Traits\TraitAttributesRule
	{
		return new PHPStan\Rules\Traits\TraitAttributesRule($this->getService('0488'), $this->getService('0499'));
	}


	public function createService0636(): PHPStan\Rules\Traits\ConstantsInTraitsRule
	{
		return new PHPStan\Rules\Traits\ConstantsInTraitsRule($this->getService('0499'));
	}


	public function createService0637(): PHPStan\Rules\Traits\NotAnalysedTraitRule
	{
		return new PHPStan\Rules\Traits\NotAnalysedTraitRule;
	}


	public function createService0638(): PHPStan\Rules\DeadCode\CallToConstructorStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToConstructorStatementWithoutImpurePointsRule($this->getService('0438'));
	}


	public function createService0639(): PHPStan\Rules\DeadCode\CallToMethodStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToMethodStatementWithoutImpurePointsRule($this->getService('0438'));
	}


	public function createService0640(): PHPStan\Rules\DeadCode\CallToFunctionStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToFunctionStatementWithoutImpurePointsRule($this->getService('0438'));
	}


	public function createService0641(): PHPStan\Rules\DeadCode\CallToStaticMethodStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToStaticMethodStatementWithoutImpurePointsRule($this->getService('0438'));
	}


	public function createService0642(): PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule(
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.Properties.ReadWritePropertiesExtension'),
			$this->getParameter('propertyAlwaysWrittenTags'),
			$this->getParameter('propertyAlwaysReadTags'),
			$this->getParameter('checkUninitializedProperties')
		);
	}


	public function createService0643(): PHPStan\Rules\DeadCode\UnusedPrivateMethodRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateMethodRule($this->getService('phpstan.extensionsCollection.PHPStan.Rules.Methods.AlwaysUsedMethodExtension'));
	}


	public function createService0644(): PHPStan\Rules\DeadCode\UnreachableStatementRule
	{
		return new PHPStan\Rules\DeadCode\UnreachableStatementRule;
	}


	public function createService0645(): PHPStan\Rules\DeadCode\UnusedPrivateConstantRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateConstantRule($this->getService('phpstan.extensionsCollection.PHPStan.Rules.Constants.AlwaysUsedClassConstantsExtension'));
	}


	public function createService0646(): PHPStan\Rules\DeadCode\NoopRule
	{
		return new PHPStan\Rules\DeadCode\NoopRule($this->getService('0237'));
	}


	public function createService0647(): PHPStan\Rules\Ignore\IgnoreParseErrorRule
	{
		return new PHPStan\Rules\Ignore\IgnoreParseErrorRule;
	}


	public function createService0648(): PHPStan\Rules\Functions\InvalidLexicalVariablesInClosureUseRule
	{
		return new PHPStan\Rules\Functions\InvalidLexicalVariablesInClosureUseRule;
	}


	public function createService0649(): PHPStan\Rules\Functions\PrintfArrayParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfArrayParametersRule($this->getService('0137'), $this->getService('reflectionProvider'));
	}


	public function createService0650(): PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createService0651(): PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule;
	}


	public function createService0652(): PHPStan\Rules\Functions\CallToNonExistentFunctionRule
	{
		return new PHPStan\Rules\Functions\CallToNonExistentFunctionRule(
			$this->getService('reflectionProvider'),
			$this->getParameter('checkFunctionNameCase'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0653(): PHPStan\Rules\Functions\CallUserFuncRule
	{
		return new PHPStan\Rules\Functions\CallUserFuncRule($this->getService('reflectionProvider'), $this->getService('0485'));
	}


	public function createService0654(): PHPStan\Rules\Functions\CallCallablesRule
	{
		return new PHPStan\Rules\Functions\CallCallablesRule(
			$this->getService('0485'),
			$this->getService('0449'),
			$this->getParameter('reportMaybes')
		);
	}


	public function createService0655(): PHPStan\Rules\Functions\CallToFunctionParametersRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionParametersRule(
			$this->getService('reflectionProvider'),
			$this->getService('0485')
		);
	}


	public function createService0656(): PHPStan\Rules\Functions\MissingFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\Functions\MissingFunctionReturnTypehintRule($this->getService('0467'));
	}


	public function createService0657(): PHPStan\Rules\Functions\ReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ReturnNullsafeByRefRule($this->getService('0427'));
	}


	public function createService0658(): PHPStan\Rules\Functions\FunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\FunctionAttributesRule($this->getService('0488'));
	}


	public function createService0659(): PHPStan\Rules\Functions\ArrayValuesRule
	{
		return new PHPStan\Rules\Functions\ArrayValuesRule(
			$this->getService('reflectionProvider'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0660(): PHPStan\Rules\Functions\ArrayFilterRule
	{
		return new PHPStan\Rules\Functions\ArrayFilterRule(
			$this->getService('reflectionProvider'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0661(): PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule($this->getService('0455'));
	}


	public function createService0662(): PHPStan\Rules\Functions\FunctionCallableRule
	{
		return new PHPStan\Rules\Functions\FunctionCallableRule(
			$this->getService('reflectionProvider'),
			$this->getService('0449'),
			$this->getService('0499'),
			$this->getParameter('checkFunctionNameCase'),
			$this->getParameter('reportMaybes')
		);
	}


	public function createService0663(): PHPStan\Rules\Functions\DefineParametersRule
	{
		return new PHPStan\Rules\Functions\DefineParametersRule($this->getService('0499'));
	}


	public function createService0664(): PHPStan\Rules\Functions\VariadicParametersDeclarationRule
	{
		return new PHPStan\Rules\Functions\VariadicParametersDeclarationRule;
	}


	public function createService0665(): PHPStan\Rules\Functions\RandomIntParametersRule
	{
		return new PHPStan\Rules\Functions\RandomIntParametersRule(
			$this->getService('reflectionProvider'),
			$this->getService('0499'),
			$this->getParameter('reportMaybes')
		);
	}


	public function createService0666(): PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule;
	}


	public function createService0667(): PHPStan\Rules\Functions\InnerFunctionRule
	{
		return new PHPStan\Rules\Functions\InnerFunctionRule;
	}


	public function createService0668(): PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule($this->getService('0468'));
	}


	public function createService0669(): PHPStan\Rules\Functions\ParamAttributesRule
	{
		return new PHPStan\Rules\Functions\ParamAttributesRule($this->getService('0488'));
	}


	public function createService0670(): PHPStan\Rules\Functions\PrintfParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfParametersRule($this->getService('0137'), $this->getService('reflectionProvider'));
	}


	public function createService0671(): PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule;
	}


	public function createService0672(): PHPStan\Rules\Functions\ParameterCastableToStringRule
	{
		return new PHPStan\Rules\Functions\ParameterCastableToStringRule(
			$this->getService('reflectionProvider'),
			$this->getService('0447')
		);
	}


	public function createService0673(): PHPStan\Rules\Functions\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInTypehintsRule($this->getService('0455'));
	}


	public function createService0674(): PHPStan\Rules\Functions\InvalidParameterNameRule
	{
		return new PHPStan\Rules\Functions\InvalidParameterNameRule;
	}


	public function createService0675(): PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule(
			$this->getService('0455'),
			$this->getService('0499')
		);
	}


	public function createService0676(): PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule($this->getService('0427'));
	}


	public function createService0677(): PHPStan\Rules\Functions\ImplodeParameterCastableToStringRule
	{
		return new PHPStan\Rules\Functions\ImplodeParameterCastableToStringRule(
			$this->getService('reflectionProvider'),
			$this->getService('0447')
		);
	}


	public function createService0678(): PHPStan\Rules\Functions\ReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ReturnTypeRule($this->getService('0468'));
	}


	public function createService0679(): PHPStan\Rules\Functions\ArrowFunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionAttributesRule($this->getService('0488'));
	}


	public function createService0680(): PHPStan\Rules\Functions\RedefinedParametersRule
	{
		return new PHPStan\Rules\Functions\RedefinedParametersRule;
	}


	public function createService0681(): PHPStan\Rules\Functions\ClosureReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ClosureReturnTypeRule($this->getService('0468'));
	}


	public function createService0682(): PHPStan\Rules\Functions\SortParameterCastableToStringRule
	{
		return new PHPStan\Rules\Functions\SortParameterCastableToStringRule(
			$this->getService('reflectionProvider'),
			$this->getService('0447')
		);
	}


	public function createService0683(): PHPStan\Rules\Functions\ClosureAttributesRule
	{
		return new PHPStan\Rules\Functions\ClosureAttributesRule($this->getService('0488'));
	}


	public function createService0684(): PHPStan\Rules\Functions\FilterVarRule
	{
		return new PHPStan\Rules\Functions\FilterVarRule(
			$this->getService('reflectionProvider'),
			$this->getService('0126'),
			$this->getService('0127'),
			$this->getService('0499')
		);
	}


	public function createService0685(): PHPStan\Rules\Functions\UnusedClosureUsesRule
	{
		return new PHPStan\Rules\Functions\UnusedClosureUsesRule($this->getService('0486'));
	}


	public function createService0686(): PHPStan\Rules\Functions\CallToFunctionStatementWithNoDiscardRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionStatementWithNoDiscardRule($this->getService('reflectionProvider'));
	}


	public function createService0687(): PHPStan\Rules\Functions\MissingFunctionParameterTypehintRule
	{
		return new PHPStan\Rules\Functions\MissingFunctionParameterTypehintRule($this->getService('0467'));
	}


	public function createService0688(): PHPStan\Rules\Functions\ReturnTypeAfterFinallyRule
	{
		return new PHPStan\Rules\Functions\ReturnTypeAfterFinallyRule($this->getService('0449'));
	}


	public function createService0689(): PHPStan\Rules\Functions\UselessFunctionReturnValueRule
	{
		return new PHPStan\Rules\Functions\UselessFunctionReturnValueRule($this->getService('reflectionProvider'));
	}


	public function createService0690(): PHPStan\Rules\Regexp\RegularExpressionPatternRule
	{
		return new PHPStan\Rules\Regexp\RegularExpressionPatternRule($this->getService('031'));
	}


	public function createService0691(): PHPStan\Rules\Regexp\RegularExpressionQuotingRule
	{
		return new PHPStan\Rules\Regexp\RegularExpressionQuotingRule($this->getService('reflectionProvider'), $this->getService('031'));
	}


	public function createService0692(): PHPStan\Rules\Names\UsedNamesRule
	{
		return new PHPStan\Rules\Names\UsedNamesRule;
	}


	public function createService0693(): PHPStan\Rules\Whitespace\FileWhitespaceRule
	{
		return new PHPStan\Rules\Whitespace\FileWhitespaceRule;
	}


	public function createService0694(): PHPStan\Rules\Generics\MethodSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\MethodSignatureVarianceRule($this->getService('0444'));
	}


	public function createService0695(): PHPStan\Rules\Generics\ClassTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\ClassTemplateTypeRule($this->getService('0446'));
	}


	public function createService0696(): PHPStan\Rules\Generics\TraitTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\TraitTemplateTypeRule($this->getService('026'), $this->getService('0446'));
	}


	public function createService0697(): PHPStan\Rules\Generics\EnumAncestorsRule
	{
		return new PHPStan\Rules\Generics\EnumAncestorsRule($this->getService('0443'), $this->getService('0442'));
	}


	public function createService0698(): PHPStan\Rules\Generics\FunctionTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\FunctionTemplateTypeRule($this->getService('026'), $this->getService('0446'));
	}


	public function createService0699(): PHPStan\Rules\Generics\ClassAncestorsRule
	{
		return new PHPStan\Rules\Generics\ClassAncestorsRule($this->getService('0443'), $this->getService('0442'));
	}


	public function createService0700(): PHPStan\Rules\Generics\FunctionSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\FunctionSignatureVarianceRule($this->getService('0444'));
	}


	public function createService0701(): PHPStan\Rules\Generics\InterfaceAncestorsRule
	{
		return new PHPStan\Rules\Generics\InterfaceAncestorsRule($this->getService('0443'), $this->getService('0442'));
	}


	public function createService0702(): PHPStan\Rules\Generics\UsedTraitsRule
	{
		return new PHPStan\Rules\Generics\UsedTraitsRule($this->getService('026'), $this->getService('0443'));
	}


	public function createService0703(): PHPStan\Rules\Generics\MethodTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\MethodTemplateTypeRule($this->getService('026'), $this->getService('0446'));
	}


	public function createService0704(): PHPStan\Rules\Generics\InterfaceTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\InterfaceTemplateTypeRule($this->getService('0446'));
	}


	public function createService0705(): PHPStan\Rules\Generics\EnumTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\EnumTemplateTypeRule;
	}


	public function createService0706(): PHPStan\Rules\Generics\PropertyVarianceRule
	{
		return new PHPStan\Rules\Generics\PropertyVarianceRule($this->getService('0444'));
	}


	public function createService0707(): PHPStan\Rules\Generics\MethodTagTemplateTypeTraitRule
	{
		return new PHPStan\Rules\Generics\MethodTagTemplateTypeTraitRule(
			$this->getService('0441'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0708(): PHPStan\Rules\Generics\MethodTagTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\MethodTagTemplateTypeRule($this->getService('0441'));
	}


	public function createService0709(): PHPStan\Rules\Keywords\RequireFileExistsRule
	{
		return new PHPStan\Rules\Keywords\RequireFileExistsRule(
			$this->getService('0237'),
			$this->getParameter('featureToggles')['magicDirInInclude'],
			$this->getService('0408'),
			$this->getService('0409')
		);
	}


	public function createService0710(): PHPStan\Rules\Keywords\DeclareStrictTypesRule
	{
		return new PHPStan\Rules\Keywords\DeclareStrictTypesRule($this->getService('0237'));
	}


	public function createService0711(): PHPStan\Rules\Keywords\GotoUndefinedLabelRule
	{
		return new PHPStan\Rules\Keywords\GotoUndefinedLabelRule;
	}


	public function createService0712(): PHPStan\Rules\Keywords\ContinueBreakInLoopRule
	{
		return new PHPStan\Rules\Keywords\ContinueBreakInLoopRule;
	}


	public function createService0713(): PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule(
			$this->getService('0451'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('reportAlwaysTrueInLastCondition'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0714(): PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule
	{
		return new PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule(
			$this->getService('0454'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0715(): PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule
	{
		return new PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule(
			$this->getService('0454'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0716(): PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule(
			$this->getService('0451'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('reportAlwaysTrueInLastCondition'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0717(): PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule
	{
		return new PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule(
			$this->getService('0287'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('reportAlwaysTrueInLastCondition'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0718(): PHPStan\Rules\Comparison\MatchExpressionRule
	{
		return new PHPStan\Rules\Comparison\MatchExpressionRule(
			$this->getService('0454'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain')
		);
	}


	public function createService0719(): PHPStan\Rules\Comparison\FunctionCallConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\FunctionCallConstantConditionRule;
	}


	public function createService0720(): PHPStan\Rules\Comparison\BooleanNotConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanNotConstantConditionRule(
			$this->getService('0454'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('reportAlwaysTrueInLastCondition'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0721(): PHPStan\Rules\Comparison\IfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\IfConstantConditionRule(
			$this->getService('0454'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0722(): PHPStan\Rules\Comparison\ConstantLooseComparisonRule
	{
		return new PHPStan\Rules\Comparison\ConstantLooseComparisonRule(
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('reportAlwaysTrueInLastCondition'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0723(): PHPStan\Rules\Comparison\BooleanAndConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanAndConstantConditionRule(
			$this->getService('0454'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('reportAlwaysTrueInLastCondition'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0724(): PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule(
			$this->getService('0454'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0725(): PHPStan\Rules\Comparison\LogicalXorConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\LogicalXorConstantConditionRule(
			$this->getService('0454'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('reportAlwaysTrueInLastCondition'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0726(): PHPStan\Rules\Comparison\ElseIfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\ElseIfConstantConditionRule(
			$this->getService('0454'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('reportAlwaysTrueInLastCondition'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0727(): PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule(
			$this->getService('0451'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('reportAlwaysTrueInLastCondition'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0728(): PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule(
			$this->getService('0454'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0729(): PHPStan\Rules\Comparison\BooleanOrConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanOrConstantConditionRule(
			$this->getService('0454'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0450'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('reportAlwaysTrueInLastCondition'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0730(): PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule
	{
		return new PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule;
	}


	public function createService0731(): PHPStan\Rules\Comparison\ConstantConditionInTraitRule
	{
		return new PHPStan\Rules\Comparison\ConstantConditionInTraitRule;
	}


	public function createService0732(): PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule(
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0733(): PHPStan\Rules\Types\InvalidTypesInUnionRule
	{
		return new PHPStan\Rules\Types\InvalidTypesInUnionRule;
	}


	public function createService0734(): PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule(
			$this->getService('0445'),
			$this->getService('0458'),
			$this->getService('0459')
		);
	}


	public function createService0735(): PHPStan\Rules\PhpDoc\FunctionAssertRule
	{
		return new PHPStan\Rules\PhpDoc\FunctionAssertRule($this->getService('0460'));
	}


	public function createService0736(): PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule($this->getService('0458'), $this->getService('0445'));
	}


	public function createService0737(): PHPStan\Rules\PhpDoc\SealedDefinitionTraitRule
	{
		return new PHPStan\Rules\PhpDoc\SealedDefinitionTraitRule($this->getService('reflectionProvider'));
	}


	public function createService0738(): PHPStan\Rules\PhpDoc\IncompatiblePropertyHookPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePropertyHookPhpDocTypeRule($this->getService('026'), $this->getService('0462'));
	}


	public function createService0739(): PHPStan\Rules\PhpDoc\MethodAssertRule
	{
		return new PHPStan\Rules\PhpDoc\MethodAssertRule($this->getService('0460'));
	}


	public function createService0740(): PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule($this->getService('0445'), $this->getService('0458'));
	}


	public function createService0741(): PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule($this->getService('0873'), $this->getService('0876'));
	}


	public function createService0742(): PHPStan\Rules\PhpDoc\SealedDefinitionClassRule
	{
		return new PHPStan\Rules\PhpDoc\SealedDefinitionClassRule(
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getParameter('checkClassCaseSensitivity'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0743(): PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule(
			$this->getService('026'),
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getService('0445'),
			$this->getService('0467'),
			$this->getService('0458'),
			$this->getParameter('checkClassCaseSensitivity'),
			$this->getParameter('checkMissingVarTagTypehint'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0744(): PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule
	{
		return new PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule($this->getService('0457'));
	}


	public function createService0745(): PHPStan\Rules\PhpDoc\RequireExtendsDefinitionTraitRule
	{
		return new PHPStan\Rules\PhpDoc\RequireExtendsDefinitionTraitRule(
			$this->getService('reflectionProvider'),
			$this->getService('0461')
		);
	}


	public function createService0746(): PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule($this->getService('026'));
	}


	public function createService0747(): PHPStan\Rules\PhpDoc\IncompatibleParamImmediatelyInvokedCallableRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleParamImmediatelyInvokedCallableRule($this->getService('026'));
	}


	public function createService0748(): PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule($this->getService('0873'), $this->getService('0876'));
	}


	public function createService0749(): PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule
	{
		return new PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule($this->getService('026'), $this->getService('0456'));
	}


	public function createService0750(): PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule
	{
		return new PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule($this->getService('0456'));
	}


	public function createService0751(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule($this->getService('026'), $this->getService('0462'));
	}


	public function createService0752(): PHPStan\Rules\PhpDoc\RequireImplementsDefinitionClassRule
	{
		return new PHPStan\Rules\PhpDoc\RequireImplementsDefinitionClassRule;
	}


	public function createService0753(): PHPStan\Rules\PhpDoc\RequireImplementsDefinitionTraitRule
	{
		return new PHPStan\Rules\PhpDoc\RequireImplementsDefinitionTraitRule(
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getParameter('checkClassCaseSensitivity'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0754(): PHPStan\Rules\PhpDoc\RequireExtendsDefinitionClassRule
	{
		return new PHPStan\Rules\PhpDoc\RequireExtendsDefinitionClassRule($this->getService('0461'));
	}


	public function createService0755(): PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule
	{
		return new PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule($this->getService('0457'));
	}


	public function createService0756(): PHPStan\Rules\Properties\PropertyAttributesRule
	{
		return new PHPStan\Rules\Properties\PropertyAttributesRule($this->getService('0488'), $this->getService('0499'));
	}


	public function createService0757(): PHPStan\Rules\Properties\InvalidCallablePropertyTypeRule
	{
		return new PHPStan\Rules\Properties\InvalidCallablePropertyTypeRule;
	}


	public function createService0758(): PHPStan\Rules\Properties\SetNonVirtualPropertyHookAssignRule
	{
		return new PHPStan\Rules\Properties\SetNonVirtualPropertyHookAssignRule;
	}


	public function createService0759(): PHPStan\Rules\Properties\PropertiesInInterfaceRule
	{
		return new PHPStan\Rules\Properties\PropertiesInInterfaceRule($this->getService('0499'));
	}


	public function createService0760(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule($this->getService('0464'), $this->getService('0517'));
	}


	public function createService0761(): PHPStan\Rules\Properties\ReadOnlyPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyRule($this->getService('0499'));
	}


	public function createService0762(): PHPStan\Rules\Properties\PropertyHookAttributesRule
	{
		return new PHPStan\Rules\Properties\PropertyHookAttributesRule($this->getService('0488'));
	}


	public function createService0763(): PHPStan\Rules\Properties\ExistingClassesInPropertyHookTypehintsRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertyHookTypehintsRule($this->getService('0455'));
	}


	public function createService0764(): PHPStan\Rules\Properties\NullsafePropertyFetchRule
	{
		return new PHPStan\Rules\Properties\NullsafePropertyFetchRule(
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0765(): PHPStan\Rules\Properties\PropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\PropertyAssignRefRule($this->getService('0499'), $this->getService('0464'));
	}


	public function createService0766(): PHPStan\Rules\Properties\GetNonVirtualPropertyHookReadRule
	{
		return new PHPStan\Rules\Properties\GetNonVirtualPropertyHookReadRule;
	}


	public function createService0767(): PHPStan\Rules\Properties\ExistingClassesInPropertiesRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getService('0458'),
			$this->getService('0499'),
			$this->getParameter('checkClassCaseSensitivity'),
			$this->getParameter('checkThisOnly'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0768(): PHPStan\Rules\Properties\PropertyInClassRule
	{
		return new PHPStan\Rules\Properties\PropertyInClassRule($this->getService('0499'));
	}


	public function createService0769(): PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule($this->getService('0517'));
	}


	public function createService0770(): PHPStan\Rules\Properties\AccessStaticPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesRule($this->getService('0466'));
	}


	public function createService0771(): PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule(
			$this->getService('0464'),
			$this->getService('0517'),
			$this->getService('0499')
		);
	}


	public function createService0772(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule($this->getService('0464'));
	}


	public function createService0773(): PHPStan\Rules\Properties\AccessPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesRule($this->getService('0465'));
	}


	public function createService0774(): PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule($this->getService('0517'));
	}


	public function createService0775(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule;
	}


	public function createService0776(): PHPStan\Rules\Properties\OverridingPropertyRule
	{
		return new PHPStan\Rules\Properties\OverridingPropertyRule(
			$this->getService('0499'),
			$this->getParameter('checkPhpDocMethodSignatures'),
			$this->getParameter('reportMaybesInPropertyPhpDocTypes'),
			$this->getParameter('checkMissingOverridePropertyAttribute'),
			$this->getParameter('checkMissingOverrideMethodAttribute')
		);
	}


	public function createService0777(): PHPStan\Rules\Properties\AccessPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesInAssignRule($this->getService('0465'));
	}


	public function createService0778(): PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule($this->getService('0466'));
	}


	public function createService0779(): PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule($this->getService('0464'));
	}


	public function createService0780(): PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule($this->getService('0449'));
	}


	public function createService0781(): PHPStan\Rules\Properties\MissingPropertyTypehintRule
	{
		return new PHPStan\Rules\Properties\MissingPropertyTypehintRule($this->getService('0467'));
	}


	public function createService0782(): PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule(
			$this->getService('0463'),
			$this->getService('0464'),
			$this->getService('0449'),
			$this->getParameter('checkThisOnly')
		);
	}


	public function createService0783(): PHPStan\Rules\Properties\TypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\TypesAssignedToPropertiesRule($this->getService('0449'), $this->getService('0464'));
	}


	public function createService0784(): PHPStan\Rules\Properties\SetPropertyHookParameterRule
	{
		return new PHPStan\Rules\Properties\SetPropertyHookParameterRule(
			$this->getService('0467'),
			$this->getParameter('checkPhpDocMethodSignatures'),
			$this->getParameter('checkMissingTypehints')
		);
	}


	public function createService0785(): PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule(
			$this->getService('0449'),
			$this->getService('0463'),
			$this->getService('0464'),
			$this->getParameter('checkThisOnly')
		);
	}


	public function createService0786(): PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule
	{
		return new PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule;
	}


	public function createService0787(): PHPStan\Rules\Generators\YieldInGeneratorRule
	{
		return new PHPStan\Rules\Generators\YieldInGeneratorRule($this->getParameter('reportMaybes'));
	}


	public function createService0788(): PHPStan\Rules\Generators\YieldFromTypeRule
	{
		return new PHPStan\Rules\Generators\YieldFromTypeRule($this->getService('0449'), $this->getParameter('reportMaybes'));
	}


	public function createService0789(): PHPStan\Rules\Generators\YieldTypeRule
	{
		return new PHPStan\Rules\Generators\YieldTypeRule($this->getService('0449'));
	}


	public function createService0790(): PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule
	{
		return new PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule($this->getService('0237'), $this->getService('0449'));
	}


	public function createService0791(): PHPStan\Rules\Cast\DeprecatedCastRule
	{
		return new PHPStan\Rules\Cast\DeprecatedCastRule($this->getService('0499'));
	}


	public function createService0792(): PHPStan\Rules\Cast\VoidCastRule
	{
		return new PHPStan\Rules\Cast\VoidCastRule($this->getService('0499'));
	}


	public function createService0793(): PHPStan\Rules\Cast\UnsetCastRule
	{
		return new PHPStan\Rules\Cast\UnsetCastRule($this->getService('0499'));
	}


	public function createService0794(): PHPStan\Rules\Cast\EchoRule
	{
		return new PHPStan\Rules\Cast\EchoRule($this->getService('0449'));
	}


	public function createService0795(): PHPStan\Rules\Cast\InvalidCastRule
	{
		return new PHPStan\Rules\Cast\InvalidCastRule($this->getService('reflectionProvider'), $this->getService('0449'));
	}


	public function createService0796(): PHPStan\Rules\Cast\PrintRule
	{
		return new PHPStan\Rules\Cast\PrintRule($this->getService('0449'));
	}


	public function createService0797(): PHPStan\Rules\Methods\AbstractPrivateMethodRule
	{
		return new PHPStan\Rules\Methods\AbstractPrivateMethodRule;
	}


	public function createService0798(): PHPStan\Rules\Methods\ConsistentConstructorDeclarationRule
	{
		return new PHPStan\Rules\Methods\ConsistentConstructorDeclarationRule;
	}


	public function createService0799(): PHPStan\Rules\Methods\CallToMethodStatementWithNoDiscardRule
	{
		return new PHPStan\Rules\Methods\CallToMethodStatementWithNoDiscardRule($this->getService('0449'));
	}


	public function createService0800(): PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule
	{
		return new PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule($this->getService('0499'));
	}


	public function createService0801(): PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule
	{
		return new PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule;
	}


	public function createService0802(): PHPStan\Rules\Methods\ConsistentConstructorRule
	{
		return new PHPStan\Rules\Methods\ConsistentConstructorRule(
			$this->getService('0423'),
			$this->getService('0473'),
			$this->getService('0474')
		);
	}


	public function createService0803(): PHPStan\Rules\Methods\MissingMethodReturnTypehintRule
	{
		return new PHPStan\Rules\Methods\MissingMethodReturnTypehintRule($this->getService('0467'));
	}


	public function createService0804(): PHPStan\Rules\Methods\StaticMethodCallableRule
	{
		return new PHPStan\Rules\Methods\StaticMethodCallableRule($this->getService('0470'), $this->getService('0499'));
	}


	public function createService0805(): PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule($this->getService('0449'));
	}


	public function createService0806(): PHPStan\Rules\Methods\MethodVisibilityInInterfaceRule
	{
		return new PHPStan\Rules\Methods\MethodVisibilityInInterfaceRule;
	}


	public function createService0807(): PHPStan\Rules\Methods\MissingMethodParameterTypehintRule
	{
		return new PHPStan\Rules\Methods\MissingMethodParameterTypehintRule($this->getService('0467'));
	}


	public function createService0808(): PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createService0809(): PHPStan\Rules\Methods\MethodAttributesRule
	{
		return new PHPStan\Rules\Methods\MethodAttributesRule($this->getService('0488'));
	}


	public function createService0810(): PHPStan\Rules\Methods\CallStaticMethodsRule
	{
		return new PHPStan\Rules\Methods\CallStaticMethodsRule(
			$this->getService('0470'),
			$this->getService('0485'),
			$this->getService('0439')
		);
	}


	public function createService0811(): PHPStan\Rules\Methods\OverridingMethodRule
	{
		return new PHPStan\Rules\Methods\OverridingMethodRule(
			$this->getService('0499'),
			$this->getService('0469'),
			$this->getParameter('checkPhpDocMethodSignatures'),
			$this->getService('0473'),
			$this->getService('0474'),
			$this->getService('0471'),
			$this->getParameter('checkMissingOverrideMethodAttribute')
		);
	}


	public function createService0812(): PHPStan\Rules\Methods\ConstructorReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ConstructorReturnTypeRule;
	}


	public function createService0813(): PHPStan\Rules\Methods\CallToStaticMethodStatementWithNoDiscardRule
	{
		return new PHPStan\Rules\Methods\CallToStaticMethodStatementWithNoDiscardRule(
			$this->getService('0449'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0814(): PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule;
	}


	public function createService0815(): PHPStan\Rules\Methods\NullsafeMethodCallRule
	{
		return new PHPStan\Rules\Methods\NullsafeMethodCallRule(
			$this->getParameter('treatPhpDocTypesAsCertain'),
			$this->getParameter('tips')['treatPhpDocTypesAsCertain']
		);
	}


	public function createService0816(): PHPStan\Rules\Methods\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Methods\ExistingClassesInTypehintsRule($this->getService('0455'));
	}


	public function createService0817(): PHPStan\Rules\Methods\MethodCallableRule
	{
		return new PHPStan\Rules\Methods\MethodCallableRule($this->getService('0475'), $this->getService('0499'));
	}


	public function createService0818(): PHPStan\Rules\Methods\MissingMethodImplementationRule
	{
		return new PHPStan\Rules\Methods\MissingMethodImplementationRule;
	}


	public function createService0819(): PHPStan\Rules\Methods\MethodCallWithPossiblyRenamedNamedArgumentRule
	{
		return new PHPStan\Rules\Methods\MethodCallWithPossiblyRenamedNamedArgumentRule;
	}


	public function createService0820(): PHPStan\Rules\Methods\CallMethodsRule
	{
		return new PHPStan\Rules\Methods\CallMethodsRule(
			$this->getService('0475'),
			$this->getService('0485'),
			$this->getService('0439')
		);
	}


	public function createService0821(): PHPStan\Rules\Methods\ReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ReturnTypeRule($this->getService('0468'));
	}


	public function createService0822(): PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule(
			$this->getService('0449'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0823(): PHPStan\Rules\Methods\FinalPrivateMethodRule
	{
		return new PHPStan\Rules\Methods\FinalPrivateMethodRule;
	}


	public function createService0824(): PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule
	{
		return new PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule;
	}


	public function createService0825(): PHPStan\Rules\Methods\MissingMethodSelfOutTypeRule
	{
		return new PHPStan\Rules\Methods\MissingMethodSelfOutTypeRule($this->getService('0467'));
	}


	public function createService0826(): PHPStan\Rules\EnumCases\EnumCaseAttributesRule
	{
		return new PHPStan\Rules\EnumCases\EnumCaseAttributesRule($this->getService('0488'));
	}


	public function createService0827(): PHPStan\Rules\EnumCases\EnumCaseOutsideEnumRule
	{
		return new PHPStan\Rules\EnumCases\EnumCaseOutsideEnumRule;
	}


	public function createService0828(): PHPStan\Rules\Api\ApiClassConstFetchRule
	{
		return new PHPStan\Rules\Api\ApiClassConstFetchRule($this->getService('0476'), $this->getService('reflectionProvider'));
	}


	public function createService0829(): PHPStan\Rules\Api\ApiTraitUseRule
	{
		return new PHPStan\Rules\Api\ApiTraitUseRule($this->getService('0476'), $this->getService('reflectionProvider'));
	}


	public function createService0830(): PHPStan\Rules\Api\ApiClassImplementsRule
	{
		return new PHPStan\Rules\Api\ApiClassImplementsRule($this->getService('0476'), $this->getService('reflectionProvider'));
	}


	public function createService0831(): PHPStan\Rules\Api\ApiClassExtendsRule
	{
		return new PHPStan\Rules\Api\ApiClassExtendsRule($this->getService('0476'), $this->getService('reflectionProvider'));
	}


	public function createService0832(): PHPStan\Rules\Api\ApiInstantiationRule
	{
		return new PHPStan\Rules\Api\ApiInstantiationRule($this->getService('0476'), $this->getService('reflectionProvider'));
	}


	public function createService0833(): PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule
	{
		return new PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule($this->getService('0476'));
	}


	public function createService0834(): PHPStan\Rules\Api\ApiInterfaceExtendsRule
	{
		return new PHPStan\Rules\Api\ApiInterfaceExtendsRule($this->getService('0476'), $this->getService('reflectionProvider'));
	}


	public function createService0835(): PHPStan\Rules\Api\RuntimeReflectionInstantiationRule
	{
		return new PHPStan\Rules\Api\RuntimeReflectionInstantiationRule($this->getService('reflectionProvider'));
	}


	public function createService0836(): PHPStan\Rules\Api\GetTemplateTypeRule
	{
		return new PHPStan\Rules\Api\GetTemplateTypeRule($this->getService('reflectionProvider'));
	}


	public function createService0837(): PHPStan\Rules\Api\ApiStaticCallRule
	{
		return new PHPStan\Rules\Api\ApiStaticCallRule($this->getService('0476'), $this->getService('reflectionProvider'));
	}


	public function createService0838(): PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule
	{
		return new PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule;
	}


	public function createService0839(): PHPStan\Rules\Api\ApiInstanceofRule
	{
		return new PHPStan\Rules\Api\ApiInstanceofRule($this->getService('0476'), $this->getService('reflectionProvider'));
	}


	public function createService0840(): PHPStan\Rules\Api\ApiMethodCallRule
	{
		return new PHPStan\Rules\Api\ApiMethodCallRule($this->getService('0476'));
	}


	public function createService0841(): PHPStan\Rules\Api\RuntimeReflectionFunctionRule
	{
		return new PHPStan\Rules\Api\RuntimeReflectionFunctionRule($this->getService('reflectionProvider'));
	}


	public function createService0842(): PHPStan\Rules\Api\ApiInstanceofTypeRule
	{
		return new PHPStan\Rules\Api\ApiInstanceofTypeRule($this->getService('reflectionProvider'));
	}


	public function createService0843(): PHPStan\Rules\Api\OldPhpParser4ClassRule
	{
		return new PHPStan\Rules\Api\OldPhpParser4ClassRule;
	}


	public function createService0844(): PHPStan\Rules\Exceptions\ThrowExprTypeRule
	{
		return new PHPStan\Rules\Exceptions\ThrowExprTypeRule($this->getService('0449'));
	}


	public function createService0845(): PHPStan\Rules\Exceptions\ThrowExpressionRule
	{
		return new PHPStan\Rules\Exceptions\ThrowExpressionRule($this->getService('0499'));
	}


	public function createService0846(): PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			$this->getParameter('exceptions')['check']['missingCheckedExceptionInThrows']
		);
	}


	public function createService0847(): PHPStan\Rules\Exceptions\ThrowsVoidPropertyHookWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidPropertyHookWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			$this->getParameter('exceptions')['check']['missingCheckedExceptionInThrows']
		);
	}


	public function createService0848(): PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule
	{
		return new PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule;
	}


	public function createService0849(): PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule
	{
		return new PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule(
			$this->getService('exceptionTypeResolver'),
			$this->getParameter('exceptions')['reportUncheckedExceptionDeadCatch']
		);
	}


	public function createService0850(): PHPStan\Rules\Exceptions\NoncapturingCatchRule
	{
		return new PHPStan\Rules\Exceptions\NoncapturingCatchRule;
	}


	public function createService0851(): PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			$this->getParameter('exceptions')['check']['missingCheckedExceptionInThrows']
		);
	}


	public function createService0852(): PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule
	{
		return new PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule(
			$this->getService('reflectionProvider'),
			$this->getService('0419'),
			$this->getParameter('checkClassCaseSensitivity'),
			$this->getParameter('tips')['discoveringSymbols']
		);
	}


	public function createService0853(): PHPStan\Rules\Missing\MissingReturnRule
	{
		return new PHPStan\Rules\Missing\MissingReturnRule(
			$this->getParameter('checkExplicitMixedMissingReturn'),
			$this->getParameter('checkPhpDocMissingReturn')
		);
	}


	public function createService0854(): PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule($this->getService('0490'));
	}


	public function createService0855(): PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule(
			$this->getParameter('checkTooWideReturnTypesInProtectedAndPublicMethods'),
			$this->getService('0490')
		);
	}


	public function createService0856(): PHPStan\Rules\TooWideTypehints\TooWideFunctionParameterOutTypeRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideFunctionParameterOutTypeRule($this->getService('0489'));
	}


	public function createService0857(): PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule($this->getService('0490'));
	}


	public function createService0858(): PHPStan\Rules\TooWideTypehints\TooWideMethodParameterOutTypeRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideMethodParameterOutTypeRule(
			$this->getService('0489'),
			$this->getParameter('checkTooWideParameterOutInProtectedAndPublicMethods')
		);
	}


	public function createService0859(): PHPStan\Rules\TooWideTypehints\TooWidePropertyTypeRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWidePropertyTypeRule(
			$this->getService('phpstan.extensionsCollection.PHPStan.Rules.Properties.ReadWritePropertiesExtension'),
			$this->getService('0490')
		);
	}


	public function createService0860(): PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule($this->getService('0490'));
	}


	public function createService0861(): PHPStan\Rules\Traits\TraitDeclarationCollector
	{
		return new PHPStan\Rules\Traits\TraitDeclarationCollector;
	}


	public function createService0862(): PHPStan\Rules\Traits\TraitUseCollector
	{
		return new PHPStan\Rules\Traits\TraitUseCollector;
	}


	public function createService0863(): PHPStan\Rules\DeadCode\ConstructorWithoutImpurePointsCollector
	{
		return new PHPStan\Rules\DeadCode\ConstructorWithoutImpurePointsCollector($this->getService('0438'));
	}


	public function createService0864(): PHPStan\Rules\DeadCode\PossiblyPureNewCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureNewCollector($this->getService('reflectionProvider'));
	}


	public function createService0865(): PHPStan\Rules\DeadCode\PossiblyPureFuncCallCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureFuncCallCollector($this->getService('reflectionProvider'));
	}


	public function createService0866(): PHPStan\Rules\DeadCode\PossiblyPureStaticCallCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureStaticCallCollector;
	}


	public function createService0867(): PHPStan\Rules\DeadCode\PossiblyPureMethodCallCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureMethodCallCollector;
	}


	public function createService0868(): PHPStan\Rules\DeadCode\MethodWithoutImpurePointsCollector
	{
		return new PHPStan\Rules\DeadCode\MethodWithoutImpurePointsCollector($this->getService('0438'));
	}


	public function createService0869(): PHPStan\Rules\DeadCode\FunctionWithoutImpurePointsCollector
	{
		return new PHPStan\Rules\DeadCode\FunctionWithoutImpurePointsCollector($this->getService('0438'));
	}


	public function createService0870(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService0871(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver(options: ['preserveOriginalNames' => true]);
	}


	public function createService0872(): PHPStan\PhpDocParser\ParserConfig
	{
		return new PHPStan\PhpDocParser\ParserConfig(['lines' => true]);
	}


	public function createService0873(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer($this->getService('0872'));
	}


	public function createService0874(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('0872'), $this->getService('0875'));
	}


	public function createService0875(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser($this->getService('0872'));
	}


	public function createService0876(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser(
			$this->getService('0872'),
			$this->getService('0874'),
			$this->getService('0875')
		);
	}


	public function createService0877(): PHPStan\PhpDocParser\Printer\Printer
	{
		return new PHPStan\PhpDocParser\Printer\Printer;
	}


	public function createService0878(): PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return $this->getService('0525')->create();
	}


	public function createService0879(): PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return $this->getService('0526')->create();
	}


	public function createService0880(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClass');
	}


	public function createService0881(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClassConstant');
	}


	public function createService0882(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionFunctionAbstract');
	}


	public function createService0883(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionParameter');
	}


	public function createService0884(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionProperty');
	}


	public function createService0885(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension($this->getService('0499'), 'DateTime');
	}


	public function createService0886(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension($this->getService('0499'), 'DateTimeImmutable');
	}


	public function createService0887(): PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension(
			$this->getService('0499'),
			'PHPStan\Reflection\ClassReflection',
			'getNativeReflection'
		);
	}


	public function createService0888(): PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension(
			$this->getService('0499'),
			'PHPStan\Reflection\Php\BuiltinMethodReflection',
			'getDeclaringClass'
		);
	}


	public function createService0889(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension(
			$this->getService('0499'),
			'PHPStan\BetterReflection\Reflection\Adapter\ReflectionEnumBackedCase'
		);
	}


	public function createService0890(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension(
			$this->getService('0499'),
			'PHPStan\BetterReflection\Reflection\Adapter\ReflectionEnumUnitCase'
		);
	}


	public function createService0891(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule($this->getService('0478'));
	}


	public function createService0892(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule($this->getService('0478'));
	}


	public function createService0893(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule($this->getService('0478'));
	}


	public function createService0894(): PHPStan\Rules\Properties\UninitializedPropertyRule
	{
		return new PHPStan\Rules\Properties\UninitializedPropertyRule($this->getService('0517'));
	}


	public function createService0895(): PHPStan\Rules\Exceptions\MethodThrowTypeCovarianceRule
	{
		return new PHPStan\Rules\Exceptions\MethodThrowTypeCovarianceRule($this->getService('0472'), true);
	}


	public function createService0896(): PHPStan\Rules\Classes\NewStaticInAbstractClassStaticMethodRule
	{
		return new PHPStan\Rules\Classes\NewStaticInAbstractClassStaticMethodRule;
	}


	public function createService0897(): PHPStan\Rules\InternalTag\RestrictedInternalClassConstantUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalClassConstantUsageExtension($this->getService('0487'));
	}


	public function createService0898(): PHPStan\Rules\InternalTag\RestrictedInternalClassNameUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalClassNameUsageExtension($this->getService('0487'));
	}


	public function createService0899(): PHPStan\Rules\InternalTag\RestrictedInternalFunctionUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalFunctionUsageExtension($this->getService('0487'));
	}


	public function createService0900(): PHPStan\Rules\Variables\AssignToByRefExprFromForeachRule
	{
		return new PHPStan\Rules\Variables\AssignToByRefExprFromForeachRule($this->getService('0237'));
	}


	public function createService0901(): PHPStan\Rules\InternalTag\RestrictedInternalPropertyUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalPropertyUsageExtension($this->getService('0487'));
	}


	public function createService0902(): PHPStan\Rules\InternalTag\RestrictedInternalMethodUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalMethodUsageExtension($this->getService('0487'));
	}


	public function createService0903(): PHPStan\Rules\Constants\ValueAssignedToDefineRule
	{
		return new PHPStan\Rules\Constants\ValueAssignedToDefineRule($this->getService('0279'));
	}


	public function createService0904(): PHPStan\Rules\Constants\ValueAssignedToGlobalConstantRule
	{
		return new PHPStan\Rules\Constants\ValueAssignedToGlobalConstantRule($this->getService('0279'));
	}


	public function createService0905(): PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule($this->getService('0477'));
	}


	public function createService0906(): PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule(
			$this->getService('026'),
			$this->getService('0477'),
			false,
			false
		);
	}


	public function createService0907(): PHPStan\Rules\Exceptions\TooWidePropertyHookThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWidePropertyHookThrowTypeRule($this->getService('0477'), false);
	}


	public function createService0908(): PHPStan\Rules\Keywords\UnusedLabelRule
	{
		return new PHPStan\Rules\Keywords\UnusedLabelRule;
	}


	public function createService0909(): PHPStan\Rules\Comparison\ImpossibleInArrayHaystackFiniteTypesRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleInArrayHaystackFiniteTypesRule($this->getService('0538'), false);
	}


	public function createService0910(): PHPStan\Rules\Comparison\SwitchConditionRule
	{
		return new PHPStan\Rules\Comparison\SwitchConditionRule(
			$this->getService('0454'),
			$this->getService('0452'),
			$this->getService('0453'),
			$this->getService('0237'),
			$this->getService('0499'),
			false
		);
	}


	public function createService0911(): PHPStan\Rules\Functions\ParameterCastableToNumberRule
	{
		return new PHPStan\Rules\Functions\ParameterCastableToNumberRule(
			$this->getService('reflectionProvider'),
			$this->getService('0447'),
			$this->getService('0499')
		);
	}


	public function createService0912(): PHPStan\Rules\Functions\PrintfParameterTypeRule
	{
		return new PHPStan\Rules\Functions\PrintfParameterTypeRule(
			$this->getService('0137'),
			$this->getService('reflectionProvider'),
			$this->getService('0449'),
			false
		);
	}


	public function createService0913(): PHPStan\Rules\DateIntervalInstantiationRule
	{
		return new PHPStan\Rules\DateIntervalInstantiationRule;
	}


	public function createService0914(): PHPStan\Rules\Functions\SortWithoutEffectRule
	{
		return new PHPStan\Rules\Functions\SortWithoutEffectRule($this->getService('reflectionProvider'), false, true);
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('0538'),
			$this->getService('0547'),
			$this->getService('betterReflectionReflector'),
			$this->getService('026'),
			$this->getService('0507'),
			$this->getService('0499'),
			$this->getService('0514'),
			$this->getService('0513'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0544'),
			$this->getService('relativePathHelper'),
			$this->getService('0492'),
			$this->getService('0408'),
			$this->getService('0878'),
			$this->getService('0508'),
			$this->getParameter('universalObjectCratesClasses')
		);
	}


	public function createServiceBetterReflectionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionSourceLocator(): PHPStan\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0537')->create();
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('E:\xampp\htdocs\projetos\php-mini-framework\.phpstan.cache/cache/PHPStan');
	}


	public function createServiceContainer(): Container_db862b19d0
	{
		return $this;
	}


	public function createServiceCurrentPhpVersionLexer(): PhpParser\Lexer
	{
		return $this->getService('0246')->create();
	}


	public function createServiceCurrentPhpVersionPhpParser(): PhpParser\ParserAbstract
	{
		return $this->getService('currentPhpVersionPhpParserFactory')->create();
	}


	public function createServiceCurrentPhpVersionPhpParserFactory(): PHPStan\Parser\PhpParserFactory
	{
		return new PHPStan\Parser\PhpParserFactory($this->getService('currentPhpVersionLexer'), $this->getService('0499'));
	}


	public function createServiceCurrentPhpVersionRichParser(): PHPStan\Parser\RichParser
	{
		return new PHPStan\Parser\RichParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('0871'),
			$this->getService('phpstan.extensionsCollection.PhpParser.NodeVisitor'),
			$this->getService('0283')
		);
	}


	public function createServiceCurrentPhpVersionSimpleDirectParser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('currentPhpVersionPhpParser'), $this->getService('0871'));
	}


	public function createServiceCurrentPhpVersionSimpleParser(): PHPStan\Parser\CleaningParser
	{
		return new PHPStan\Parser\CleaningParser($this->getService('currentPhpVersionSimpleDirectParser'), $this->getService('0499'));
	}


	public function createServiceDefaultAnalysisParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('pathRoutingParser'), 256, 4194304);
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter(
			$this->getService('relativePathHelper'),
			$this->getService('simpleRelativePathHelper'),
			$this->getService('012'),
			$this->getParameter('tipsOfTheDay'),
			$this->getParameter('editorUrl'),
			$this->getParameter('editorUrlTitle'),
			$this->getParameter('usedLevel')
		);
	}


	public function createServiceErrorFormatter__teamcity(): PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceExceptionTypeResolver(): PHPStan\Rules\Exceptions\ExceptionTypeResolver
	{
		return $this->getService('0479');
	}


	public function createServiceFileExcluderAnalyse(): PHPStan\File\FileExcluder
	{
		return $this->getService('0410')->createAnalyseFileExcluder();
	}


	public function createServiceFileExcluderScan(): PHPStan\File\FileExcluder
	{
		return $this->getService('0410')->createScanFileExcluder();
	}


	public function createServiceFileFinderAnalyse(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder(
			$this->getService('fileExcluderAnalyse'),
			$this->getService('0408'),
			['php'],
			$this->getService('0411')
		);
	}


	public function createServiceFileFinderScan(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder(
			$this->getService('fileExcluderScan'),
			$this->getService('0408'),
			['php'],
			$this->getService('0411')
		);
	}


	public function createServiceFreshStubParser(): PHPStan\Parser\StubParser
	{
		return new PHPStan\Parser\StubParser($this->getService('php8PhpParser'), $this->getService('0871'));
	}


	public function createServiceParentDirectoryRelativePathHelper(): PHPStan\File\ParentDirectoryRelativePathHelper
	{
		return new PHPStan\File\ParentDirectoryRelativePathHelper($this->getParameter('currentWorkingDirectory'));
	}


	public function createServicePathRoutingParser(): PHPStan\Parser\PathRoutingParser
	{
		return new PHPStan\Parser\PathRoutingParser(
			$this->getService('0408'),
			$this->getService('currentPhpVersionRichParser'),
			$this->getService('currentPhpVersionSimpleParser'),
			$this->getService('php8Parser'),
			$this->getParameter('singleReflectionFile')
		);
	}


	public function createServicePhp8Lexer(): PhpParser\Lexer\Emulative
	{
		return $this->getService('0246')->createEmulative();
	}


	public function createServicePhp8Parser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('php8PhpParser'), $this->getService('0871'));
	}


	public function createServicePhp8PhpParser(): PhpParser\Parser\Php8
	{
		return new PhpParser\Parser\Php8($this->getService('php8Lexer'));
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('defaultAnalysisParser'));
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Analyser__ExprHandler(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection($this->getService('0406'), 'phpstan.exprHandler');
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Analyser__IgnoreErrorExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection($this->getService('0406'), 'phpstan.ignoreErrorExtension');
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Analyser__PerFileAnalysisResettable(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection($this->getService('0406'), 'phpstan.perFileAnalysisResettable');
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Analyser__ResultCache__ResultCacheMetaExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection($this->getService('0406'), 'phpstan.resultCacheMetaExtension');
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Analyser__StmtHandler(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection($this->getService('0406'), 'phpstan.stmtHandler');
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Classes__ForbiddenClassNameExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.forbiddenClassNamesExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Collectors__Collector(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection($this->getService('0406'), 'phpstan.collector');
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Diagnose__DiagnoseExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection($this->getService('0406'), 'phpstan.diagnoseExtension');
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__PhpDoc__StubFilesExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection($this->getService('0406'), 'phpstan.stubFilesExtension');
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__PhpDoc__TypeNodeResolverExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.phpDoc.typeNodeResolverExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Reflection__AdditionalConstructorsExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.additionalConstructorsExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Reflection__AllowedSubTypesClassReflectionExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.broker.allowedSubTypesClassReflectionExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Reflection__Deprecation__ClassConstantDeprecationExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.classConstantDeprecationExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Reflection__Deprecation__ClassDeprecationExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection($this->getService('0406'), 'phpstan.classDeprecationExtension');
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Reflection__Deprecation__ConstantDeprecationExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.constantDeprecationExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Reflection__Deprecation__EnumCaseDeprecationExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.enumCaseDeprecationExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Reflection__Deprecation__FunctionDeprecationExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.functionDeprecationExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Reflection__Deprecation__MethodDeprecationExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection($this->getService('0406'), 'phpstan.methodDeprecationExtension');
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Reflection__Deprecation__PropertyDeprecationExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.propertyDeprecationExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Reflection__MethodsClassReflectionExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.broker.methodsClassReflectionExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Reflection__PropertiesClassReflectionExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.broker.propertiesClassReflectionExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Rules__Constants__AlwaysUsedClassConstantsExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.constants.alwaysUsedClassConstantsExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Rules__Methods__AlwaysUsedMethodExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.methods.alwaysUsedMethodExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Rules__Properties__ReadWritePropertiesExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.properties.readWriteExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Rules__RestrictedUsage__RestrictedClassConstantUsageExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.restrictedClassConstantUsageExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Rules__RestrictedUsage__RestrictedClassNameUsageExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.restrictedClassNameUsageExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Rules__RestrictedUsage__RestrictedFunctionUsageExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.restrictedFunctionUsageExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Rules__RestrictedUsage__RestrictedMethodUsageExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.restrictedMethodUsageExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Rules__RestrictedUsage__RestrictedPropertyUsageExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.restrictedPropertyUsageExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Rules__Rule(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection($this->getService('0406'), 'phpstan.rules.rule');
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__DynamicFunctionReturnTypeExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.broker.dynamicFunctionReturnTypeExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__DynamicFunctionThrowTypeExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.dynamicFunctionThrowTypeExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__DynamicMethodReturnTypeExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.broker.dynamicMethodReturnTypeExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__DynamicMethodThrowTypeExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.dynamicMethodThrowTypeExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__DynamicStaticMethodReturnTypeExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.broker.dynamicStaticMethodReturnTypeExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__DynamicStaticMethodThrowTypeExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.dynamicStaticMethodThrowTypeExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__ExpressionTypeResolverExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.broker.expressionTypeResolverExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__FunctionParameterClosureThisExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.functionParameterClosureThisExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__FunctionParameterClosureTypeExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.functionParameterClosureTypeExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__FunctionParameterOutTypeExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.functionParameterOutTypeExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__FunctionTypeSpecifyingExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.typeSpecifier.functionTypeSpecifyingExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__MethodParameterClosureThisExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.methodParameterClosureThisExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__MethodParameterClosureTypeExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.methodParameterClosureTypeExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__MethodParameterOutTypeExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.methodParameterOutTypeExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__MethodTypeSpecifyingExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.typeSpecifier.methodTypeSpecifyingExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__OperatorTypeSpecifyingExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.broker.operatorTypeSpecifyingExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__StaticMethodParameterClosureThisExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.staticMethodParameterClosureThisExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__StaticMethodParameterClosureTypeExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.staticMethodParameterClosureTypeExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__StaticMethodParameterOutTypeExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.staticMethodParameterOutTypeExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__StaticMethodTypeSpecifyingExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.typeSpecifier.staticMethodTypeSpecifyingExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PHPStan__Type__UnaryOperatorTypeSpecifyingExtension(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.broker.unaryOperatorTypeSpecifyingExtension'
		);
	}


	public function createServicePhpstan__extensionsCollection__PhpParser__NodeVisitor(): PHPStan\DependencyInjection\LazyExtensionsCollection
	{
		return new PHPStan\DependencyInjection\LazyExtensionsCollection(
			$this->getService('0406'),
			'phpstan.parser.richParserNodeVisitor'
		);
	}


	public function createServicePhpstanDiagnoseExtension(): PHPStan\Diagnose\PHPStanDiagnoseExtension
	{
		return new PHPStan\Diagnose\PHPStanDiagnoseExtension(
			$this->getService('0499'),
			$this->getParameter('phpVersion'),
			$this->getService('0408'),
			$this->getParameter('composerAutoloaderProjectPaths'),
			$this->getParameter('allConfigFiles'),
			$this->getService('0498'),
			$this->getService('simpleRelativePathHelper')
		);
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\ReflectionProvider
	{
		return $this->getService('reflectionProviderFactory')->create();
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory($this->getService('betterReflectionProvider'));
	}


	public function createServiceRegistry(): PHPStan\Rules\LazyRegistry
	{
		return new PHPStan\Rules\LazyRegistry($this->getService('phpstan.extensionsCollection.PHPStan.Rules.Rule'));
	}


	public function createServiceRelativePathHelper(): PHPStan\File\FuzzyRelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper(
			$this->getService('parentDirectoryRelativePathHelper'),
			$this->getParameter('currentWorkingDirectory'),
			$this->getParameter('analysedPaths')
		);
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\SimpleRelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper($this->getParameter('currentWorkingDirectory'));
	}


	public function createServiceStubFileTypeMapper(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('0518'),
			$this->getService('stubParser'),
			$this->getService('0272'),
			$this->getService('0263'),
			$this->getService('0492'),
			$this->getService('0408'),
			$this->getService('0491'),
			$this->getService('0413'),
			2048,
			512
		);
	}


	public function createServiceStubParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('freshStubParser'), 256, 4194304);
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('stubParser'),
			$this->getService('stubFileTypeMapper'),
			$this->getService('0266')
		);
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('0406'));
	}


	public function initialize(): void
	{
	}


	protected function getStaticParameters(): array
	{
		return [
			'bootstrapFiles' => [
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\runtime\ReflectionUnionType.php',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\runtime\ReflectionAttribute.php',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\runtime\Attribute85.php',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\runtime\ReflectionIntersectionType.php',
			],
			'excludePaths' => ['analyseAndScan' => [], 'analyse' => []],
			'level' => 8,
			'paths' => [
				'E:\xampp\htdocs\projetos\php-mini-framework\app',
				'E:\xampp\htdocs\projetos\php-mini-framework\src',
				'E:\xampp\htdocs\projetos\php-mini-framework\tests',
			],
			'exceptions' => [
				'implicitThrows' => true,
				'reportUncheckedExceptionDeadCatch' => true,
				'uncheckedExceptionRegexes' => [],
				'uncheckedExceptionClasses' => ['Error'],
				'checkedExceptionRegexes' => [],
				'checkedExceptionClasses' => [],
				'check' => [
					'missingCheckedExceptionInThrows' => false,
					'tooWideThrowType' => true,
					'tooWideImplicitThrowType' => false,
					'throwTypeCovariance' => false,
				],
			],
			'featureToggles' => [
				'bleedingEdge' => false,
				'checkNonStringableDynamicAccess' => false,
				'checkParameterCastableToNumberFunctions' => false,
				'skipCheckGenericClasses' => [
					'DOMNamedNodeMap',
					'ParentIterator',
					'RecursiveCachingIterator',
					'RecursiveFilterIterator',
					'RecursiveRegexIterator',
					'ReflectionObject',
				],
				'stricterFunctionMap' => false,
				'reportPreciseLineForUnusedFunctionParameter' => false,
				'checkPrintfParameterTypes' => false,
				'internalTag' => false,
				'newStaticInAbstractClassStaticMethod' => false,
				'checkExtensionsForComparisonOperators' => false,
				'checkGenericIterableClasses' => false,
				'reportTooWideBool' => false,
				'rawMessageInBaseline' => false,
				'reportNestedTooWideType' => false,
				'assignToByRefForeachExpr' => false,
				'curlSetOptArrayTypes' => false,
				'magicDirInInclude' => false,
				'checkDateIntervalConstructor' => false,
				'reportMethodPurityOverride' => false,
				'checkDynamicConstantNameValues' => false,
				'unusedLabel' => false,
				'newOnNonObject' => false,
				'unnecessaryNullCoalesce' => false,
				'finiteTypesInHaystack' => false,
				'switchConditionAlwaysFalse' => false,
				'checkImportedClassNameCase' => false,
				'sortWithoutEffect' => false,
			],
			'fileExtensions' => ['php'],
			'checkAdvancedIsset' => true,
			'reportAlwaysTrueInLastCondition' => false,
			'checkClassCaseSensitivity' => true,
			'checkExplicitMixed' => false,
			'checkImplicitMixed' => false,
			'checkFunctionArgumentTypes' => true,
			'checkFunctionNameCase' => false,
			'checkInternalClassCaseSensitivity' => false,
			'checkMissingCallableSignature' => false,
			'checkMissingVarTagTypehint' => true,
			'checkArgumentsPassedByReference' => true,
			'checkMaybeUndefinedVariables' => true,
			'checkNullables' => true,
			'checkThisOnly' => false,
			'checkUnionTypes' => true,
			'checkBenevolentUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => true,
			'checkPhpDocMethodSignatures' => true,
			'checkExtraArguments' => true,
			'checkMissingTypehints' => true,
			'checkTooWideParameterOutInProtectedAndPublicMethods' => false,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkTooWideThrowTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'checkDynamicProperties' => false,
			'strictRulesInstalled' => false,
			'deprecationRulesInstalled' => false,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'checkStrictPrintfPlaceholderTypes' => false,
			'reportMaybes' => true,
			'reportMaybesInMethodSignatures' => false,
			'reportMaybesInPropertyPhpDocTypes' => false,
			'reportStaticMethodSignatures' => false,
			'reportWrongPhpDocTypeInVarTag' => false,
			'reportAnyTypeWideningInVarTag' => false,
			'reportNonIntStringArrayKey' => false,
			'reportUnsafeArrayStringKeyCasting' => null,
			'reportPossiblyNonexistentGeneralArrayOffset' => false,
			'reportPossiblyNonexistentConstantArrayOffset' => false,
			'checkMissingOverrideMethodAttribute' => false,
			'checkMissingOverridePropertyAttribute' => null,
			'mixinExcludeClasses' => [],
			'scanFiles' => [],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 600.0,
				'maximumNumberOfProcesses' => 'auto',
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
				'loadLimit' => 1.0,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'polluteScopeWithBlock' => true,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => [],
			'treatPhpDocTypesAsCertain' => false,
			'usePathConstantsAsConstantString' => false,
			'rememberPossiblyImpureFunctionValues' => true,
			'tips' => ['discoveringSymbols' => true, 'treatPhpDocTypesAsCertain' => true, 'possiblyImpure' => true],
			'tipsOfTheDay' => true,
			'reportMagicMethods' => true,
			'reportMagicProperties' => true,
			'ignoreErrors' => [],
			'internalErrorsCountLimit' => 50,
			'cache' => [
				'nodesByStringCountMax' => 256,
				'nodesByStringSourceBytesMax' => 4194304,
				'resolvedPhpDocBlockCacheCountMax' => 2048,
				'nameScopeMapMemoryCacheCountMax' => 512,
				'phpStormStubsNodesCountMax' => 128,
				'memberCacheKeysMax' => 2048,
				'resolvedLocalTypeAliasesCountMax' => 2048,
			],
			'reportUnmatchedIgnoredErrors' => true,
			'reportIgnoresWithoutComments' => false,
			'typeAliases' => [],
			'universalObjectCratesClasses' => ['stdClass'],
			'stubFiles' => [
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\Memcached.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\Redis.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\ReflectionAttribute.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\ReflectionClassConstant.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\ReflectionFunctionAbstract.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\ReflectionMethod.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\ReflectionParameter.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\ReflectionProperty.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\iterable.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\ArrayObject.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\WeakReference.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\SensitiveParameterValue.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\ImagickPixel.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\PDOStatement.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\date.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\ibm_db2.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\mysqli.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\zip.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\dom.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\spl.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\SplObjectStorage.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\Exception.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\arrayFunctions.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\core.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\typeCheckingFunctions.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\Countable.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\file.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\stream_socket_client.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\stream_socket_server.stub',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\stubs\ctype.stub',
			],
			'earlyTerminatingMethodCalls' => [],
			'earlyTerminatingFunctionCalls' => [],
			'resultCachePath' => 'E:\xampp\htdocs\projetos\php-mini-framework\.phpstan.cache/resultCache.php',
			'resultCacheSkipIfOlderThanDays' => 7,
			'resultCacheChecksProjectExtensionFilesDependencies' => false,
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'Memcached::HAVE_ENCODING',
				'Memcached::HAVE_IGBINARY',
				'Memcached::HAVE_JSON',
				'Memcached::HAVE_MSGPACK',
				'Memcached::HAVE_SASL',
				'Memcached::HAVE_SESSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_WINDOWS_VERSION_MAJOR',
				'PHP_WINDOWS_VERSION_MINOR',
				'PHP_WINDOWS_VERSION_BUILD',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
				'OPENSSL_VERSION_NUMBER',
				'ZEND_DEBUG_BUILD',
				'ZEND_THREAD_SAFE',
				'E_ALL',
			],
			'customRulesetUsed' => false,
			'editorUrl' => null,
			'editorUrlTitle' => null,
			'errorFormat' => null,
			'sourceLocatorPlaygroundMode' => false,
			'__validate' => true,
			'parametersNotInvalidatingCache' => [
				['parameters', 'editorUrl'],
				['parameters', 'editorUrlTitle'],
				['parameters', 'errorFormat'],
				['parameters', 'ignoreErrors'],
				['parameters', 'reportUnmatchedIgnoredErrors'],
				['parameters', 'tipsOfTheDay'],
				['parameters', 'parallel'],
				['parameters', 'internalErrorsCountLimit'],
				['parameters', 'cache'],
				['parameters', 'memoryLimitFile'],
				['parameters', 'tmpDir'],
				['parameters', 'pro'],
				'parametersSchema',
			],
			'tmpDir' => 'E:\xampp\htdocs\projetos\php-mini-framework\.phpstan.cache',
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => 'E:\xampp\htdocs\projetos\php-mini-framework\.phpstan.cache',
			'rootDir' => 'E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan',
			'currentWorkingDirectory' => 'E:\xampp\htdocs\projetos\php-mini-framework',
			'cliArgumentsVariablesRegistered' => false,
			'additionalConfigFiles' => [
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar/conf/config.level8.neon',
				'E:\xampp\htdocs\projetos\php-mini-framework\phpstan.neon.dist',
			],
			'allConfigFiles' => [
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\conf\parametersSchema.neon',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\conf\config.level8.neon',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\conf\config.level7.neon',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\conf\config.level6.neon',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\conf\config.level5.neon',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\conf\config.level4.neon',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\conf\config.level3.neon',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\conf\config.level2.neon',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\conf\config.level1.neon',
				'phar://E:\xampp\htdocs\projetos\php-mini-framework\vendor\phpstan\phpstan\phpstan.phar\conf\config.level0.neon',
				'E:\xampp\htdocs\projetos\php-mini-framework\phpstan.neon.dist',
			],
			'composerAutoloaderProjectPaths' => ['E:/xampp/htdocs/projetos/php-mini-framework'],
			'generateBaselineFile' => null,
			'usedLevel' => '8',
			'cliAutoloadFile' => null,
			'env' => [
				'BIN_TARGET' => 'E:\xampp\htdocs\projetos\php-mini-framework\vendor\bin\/phpstan',
				'COLUMNS' => '120',
				'COMPOSER_BINARY' => 'C:\ProgramData\ComposerSetup\bin\composer.phar',
				'COMPOSER_RUNTIME_BIN_DIR' => 'E:\xampp\htdocs\projetos\php-mini-framework\vendor\bin\\',
				'LINES' => '9001',
				'SHELL_VERBOSITY' => '0',
				'GIT_TERMINAL_PROMPT' => '0',
				'LANGUAGE' => 'C',
				'COMPOSER_DEV_MODE' => '1',
				'Path' => 'E:\xampp\htdocs\projetos\php-mini-framework\vendor\bin;C:\Users\danjo\.cache\codex-runtimes\codex-primary-runtime\dependencies\native\powershell;C:\Users\danjo\.codex\tmp\arg0\codex-arg05pdQvJ;E:\OpenAI\CodexCLI\node_modules\@openai\codex-win32-x64\vendor\x86_64-pc-windows-msvc\codex-path;C:\Users\danjo\.cache\codex-runtimes\codex-primary-runtime\dependencies\native\libheif\libheif\bin;C:\Users\danjo\.cache\codex-runtimes\codex-primary-runtime\dependencies\native\jxrlib\jxrlib\bin;C:\Users\danjo\.cache\codex-runtimes\codex-primary-runtime\dependencies\native\poppler\Library\bin;C:\Users\danjo\.cache\codex-runtimes\codex-primary-runtime\dependencies\bin\override;E:\MinGW\bin;C:\MinGW\bin;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\150\Tools\Binn\;C:\ProgramData\chocolatey\bin;E:\xampp\php;C:\ProgramData\ComposerSetup\bin;E:\ngrok-v3-stable-windows-amd64;E:\python;E:\python\Scripts;C:\Program Files\nodejs\;C:\Program Files\NVIDIA Corporation\NVIDIA App\NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;D:\Git\cmd;E:\Program Files\nodejs\;C:\Program Files\GitHub CLI\;E:\Program Files\MySQL\MySQL Shell 26.7\bin\;C:\Users\danjo\.cache\codex-runtimes\codex-primary-runtime\dependencies\native\powershell;C:\Users\danjo\AppData\Local\Microsoft\WindowsApps;C:\Users\danjo\AppData\Local\Programs\Microsoft VS Code\bin;C:\Users\danjo\AppData\Local\GitHubDesktop\bin;C:\Users\danjo\AppData\Roaming\Composer\vendor\bin;E:\pycharm\PyCharm 2025.1.2\bin;C:\Users\danjo\AppData\Local\Microsoft\WinGet\Packages\Stripe.StripeCli_Microsoft.Winget.Source_8wekyb3d8bbwe;E:\PostgreSQL\18\bin;C:\Users\danjo\AppData\Roaming\npm;C:\Users\danjo\AppData\Local\Microsoft\WindowsApps;C:\Users\danjo\AppData\Local\Programs\DockerDesktop\resources\bin;C:\Users\danjo\.cache\codex-runtimes\codex-primary-runtime\dependencies\bin\fallback;C:\Users\danjo\.cache\codex-runtimes\codex-primary-runtime\dependencies\node\bin;C:\Users\danjo\.cache\codex-runtimes\codex-primary-runtime\dependencies\native\git\cmd;C:\Users\danjo\AppData\Local\OpenAI\Codex\bin\a1462a9577dd5c41;E:\OpenAI\CodexCLI\node_modules\@openai\codex-win32-x64\vendor\x86_64-pc-windows-msvc\bin',
				'PHP_BINARY' => 'E:\xampp\php\php.exe',
				'ALLUSERSPROFILE' => 'C:\ProgramData',
				'APPDATA' => 'C:\Users\danjo\AppData\Roaming',
				'BROWSER_USE_ACCESS_VERIFYING_IDENTITY' => 'MCowBQYDK2VwAyEAjtQmqcheLy64LrZkf44orxTjKtQ4wCMIPAcie49hxGc=',
				'ChocolateyInstall' => 'C:\ProgramData\chocolatey',
				'ChocolateyLastPathUpdate' => '133849583501620764',
				'CODEX_APPLY_PATCH_PRESERVE_LINE_ENDINGS' => '1',
				'CODEX_APP_TOOLS_PIPE_PATH' => '\\\.\pipe\codex-browser-use-2a837ca5-c697-4d57-a16e-ece62a9952d7',
				'CODEX_CI' => '1',
				'CODEX_CLI_PATH' => 'E:\OpenAI\CodexCLI\node_modules\@openai\codex-win32-x64\vendor\x86_64-pc-windows-msvc\bin\codex.exe',
				'CODEX_INTERNAL_ORIGINATOR_OVERRIDE' => 'Codex Desktop',
				'CODEX_MCP_NODE_PATH' => 'C:\Users\danjo\AppData\Local\OpenAI\Codex\runtimes\cua_node\32a57e0f41f3a96a\bin\node.exe',
				'CODEX_PERMISSION_PROFILE' => ':danger-full-access',
				'CODEX_SAGE_BACKFILL_TRACKER_TAB_REUSE' => '1',
				'CODEX_SESSION_ID' => '01a10287-e441-7f02-9ad4-c8124b63bf5a',
				'CODEX_SHELL' => '1',
				'CODEX_TASK_WORKSPACE_VERIFYING_IDENTITY' => 'MCowBQYDK2VwAyEAjtQmqcheLy64LrZkf44orxTjKtQ4wCMIPAcie49hxGc=',
				'CODEX_TECTONIC_PATH' => 'C:\Program Files\WindowsApps\OpenAI.Codex_26.930.3748.0_x64__2p2nqsd0c76g0\app\resources\tectonic\tectonic.exe',
				'CODEX_THREAD_ID' => '01a10287-e441-7f02-9ad4-c8124b63bf5a',
				'COLORTERM' => '',
				'CommonProgramFiles' => 'C:\Program Files\Common Files',
				'CommonProgramFiles(x86)' => 'C:\Program Files (x86)\Common Files',
				'CommonProgramW6432' => 'C:\Program Files\Common Files',
				'COMPUTERNAME' => 'DESKTOP-FIMK1O3',
				'ComSpec' => 'C:\WINDOWS\system32\cmd.exe',
				'DISABLE_AUTO_UPDATE' => 'true',
				'DriverData' => 'C:\Windows\System32\Drivers\DriverData',
				'GH_PAGER' => 'cat',
				'GIT_PAGER' => 'cat',
				'HOMEDRIVE' => 'C:',
				'HOMEPATH' => '\Users\danjo',
				'LANG' => 'C.UTF-8',
				'LC_ALL' => 'C.UTF-8',
				'LC_CTYPE' => 'C.UTF-8',
				'LOCALAPPDATA' => 'C:\Users\danjo\AppData\Local',
				'LOGONSERVER' => '\\\DESKTOP-FIMK1O3',
				'LOG_FORMAT' => 'json',
				'NO_COLOR' => '1',
				'NUMBER_OF_PROCESSORS' => '12',
				'OneDrive' => 'C:\Users\danjo\OneDrive',
				'OneDriveConsumer' => 'C:\Users\danjo\OneDrive',
				'OS' => 'Windows_NT',
				'PAGER' => 'cat',
				'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW;.CPL',
				'PROCESSOR_ARCHITECTURE' => 'AMD64',
				'PROCESSOR_IDENTIFIER' => 'Intel64 Family 6 Model 165 Stepping 5, GenuineIntel',
				'PROCESSOR_LEVEL' => '6',
				'PROCESSOR_REVISION' => 'a505',
				'ProgramData' => 'C:\ProgramData',
				'ProgramFiles' => 'C:\Program Files',
				'ProgramFiles(x86)' => 'C:\Program Files (x86)',
				'ProgramW6432' => 'C:\Program Files',
				'PROMPT' => '$P$G',
				'PSModulePath' => 'C:\Users\danjo\OneDrive\Documentos\PowerShell\Modules;C:\Program Files\PowerShell\Modules;c:\users\danjo\.cache\codex-runtimes\codex-primary-runtime\dependencies\native\powershell\Modules;C:\Users\danjo\OneDrive\Documentos\WindowsPowerShell\Modules;C:\Program Files\WindowsPowerShell\Modules;C:\WINDOWS\system32\WindowsPowerShell\v1.0\Modules',
				'PUBLIC' => 'C:\Users\Public',
				'PyCharm' => 'E:\pycharm\PyCharm 2025.1.2\bin;',
				'RUST_LOG' => 'warn',
				'SHELL' => 'C:\WINDOWS\System32\WindowsPowerShell\v1.0\powershell.exe',
				'SystemDrive' => 'C:',
				'SystemRoot' => 'C:\WINDOWS',
				'TEMP' => 'C:\Users\danjo\AppData\Local\Temp',
				'TERM' => 'dumb',
				'TMP' => 'C:\Users\danjo\AppData\Local\Temp',
				'USERDOMAIN' => 'DESKTOP-FIMK1O3',
				'USERDOMAIN_ROAMINGPROFILE' => 'DESKTOP-FIMK1O3',
				'USERNAME' => 'danjo',
				'USERPROFILE' => 'C:\Users\danjo',
				'VBOX_MSI_INSTALL_PATH' => 'C:\Program Files\Oracle\VirtualBox\\',
				'windir' => 'C:\WINDOWS',
				'ZSH_TMUX_AUTOSTART' => 'false',
				'ZSH_TMUX_AUTOSTARTED' => 'true',
				'__COMPAT_LAYER' => 'DetectorsAppHealth',
			],
		];
	}


	protected function getDynamicParameter($key)
	{
		switch (true) {
			case $key === 'singleReflectionFile': return null;
			case $key === 'singleReflectionInsteadOfFile': return null;
			case $key === 'analysedPaths': return null;
			case $key === 'analysedPathsFromConfig': return null;
			case $key === 'sysGetTempDir': return sys_get_temp_dir();
			case $key === 'pro': return [
			'dnsServers' => ['1.1.1.2'],
			'tmpDir' => implode('', ['', sys_get_temp_dir(), '/phpstan-fixer']),
		];
			default: return parent::getDynamicParameter($key);
		};
	}


	public function getParameters(): array
	{
		array_map([$this, 'getParameter'], [
			'bootstrapFiles',
			'excludePaths',
			'level',
			'paths',
			'exceptions',
			'featureToggles',
			'fileExtensions',
			'checkAdvancedIsset',
			'reportAlwaysTrueInLastCondition',
			'checkClassCaseSensitivity',
			'checkExplicitMixed',
			'checkImplicitMixed',
			'checkFunctionArgumentTypes',
			'checkFunctionNameCase',
			'checkInternalClassCaseSensitivity',
			'checkMissingCallableSignature',
			'checkMissingVarTagTypehint',
			'checkArgumentsPassedByReference',
			'checkMaybeUndefinedVariables',
			'checkNullables',
			'checkThisOnly',
			'checkUnionTypes',
			'checkBenevolentUnionTypes',
			'checkExplicitMixedMissingReturn',
			'checkPhpDocMissingReturn',
			'checkPhpDocMethodSignatures',
			'checkExtraArguments',
			'checkMissingTypehints',
			'checkTooWideParameterOutInProtectedAndPublicMethods',
			'checkTooWideReturnTypesInProtectedAndPublicMethods',
			'checkTooWideThrowTypesInProtectedAndPublicMethods',
			'checkUninitializedProperties',
			'checkDynamicProperties',
			'strictRulesInstalled',
			'deprecationRulesInstalled',
			'inferPrivatePropertyTypeFromConstructor',
			'checkStrictPrintfPlaceholderTypes',
			'reportMaybes',
			'reportMaybesInMethodSignatures',
			'reportMaybesInPropertyPhpDocTypes',
			'reportStaticMethodSignatures',
			'reportWrongPhpDocTypeInVarTag',
			'reportAnyTypeWideningInVarTag',
			'reportNonIntStringArrayKey',
			'reportUnsafeArrayStringKeyCasting',
			'reportPossiblyNonexistentGeneralArrayOffset',
			'reportPossiblyNonexistentConstantArrayOffset',
			'checkMissingOverrideMethodAttribute',
			'checkMissingOverridePropertyAttribute',
			'mixinExcludeClasses',
			'scanFiles',
			'scanDirectories',
			'parallel',
			'phpVersion',
			'polluteScopeWithLoopInitialAssignments',
			'polluteScopeWithAlwaysIterableForeach',
			'polluteScopeWithBlock',
			'propertyAlwaysWrittenTags',
			'propertyAlwaysReadTags',
			'additionalConstructors',
			'treatPhpDocTypesAsCertain',
			'usePathConstantsAsConstantString',
			'rememberPossiblyImpureFunctionValues',
			'tips',
			'tipsOfTheDay',
			'reportMagicMethods',
			'reportMagicProperties',
			'ignoreErrors',
			'internalErrorsCountLimit',
			'cache',
			'reportUnmatchedIgnoredErrors',
			'reportIgnoresWithoutComments',
			'typeAliases',
			'universalObjectCratesClasses',
			'stubFiles',
			'earlyTerminatingMethodCalls',
			'earlyTerminatingFunctionCalls',
			'resultCachePath',
			'resultCacheSkipIfOlderThanDays',
			'resultCacheChecksProjectExtensionFilesDependencies',
			'dynamicConstantNames',
			'customRulesetUsed',
			'editorUrl',
			'editorUrlTitle',
			'errorFormat',
			'sysGetTempDir',
			'sourceLocatorPlaygroundMode',
			'pro',
			'__validate',
			'parametersNotInvalidatingCache',
			'tmpDir',
			'debugMode',
			'productionMode',
			'tempDir',
			'rootDir',
			'currentWorkingDirectory',
			'cliArgumentsVariablesRegistered',
			'additionalConfigFiles',
			'allConfigFiles',
			'composerAutoloaderProjectPaths',
			'generateBaselineFile',
			'usedLevel',
			'cliAutoloadFile',
			'env',
			'singleReflectionFile',
			'singleReflectionInsteadOfFile',
			'analysedPaths',
			'analysedPathsFromConfig',
		]);
		return parent::getParameters();
	}
}
