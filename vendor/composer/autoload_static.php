<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd67feed0f16b3434232cf7c67f637120
{
    public static $files = array (
        'd7f4f7522f962c095f835c50e6136087' => __DIR__ . '/..' . '/hprose/hprose/src/init.php',
        'c8eb2e3d5d98f547626316c83580fab8' => __DIR__ . '/../..' . '/App.php',
    );

    public static $prefixLengthsPsr4 = array (
        'u' => 
        array (
            'ultraman\\install\\' => 17,
            'ultraman\\Log\\' => 13,
            'ultraman\\Http\\' => 14,
            'ultraman\\Foundation\\' => 20,
            'ultraman\\Exception\\' => 19,
            'ultraman\\Db\\' => 12,
            'ultraman\\Common\\' => 16,
            'ultraman\\Cache\\' => 15,
        ),
        'S' => 
        array (
            'Seld\\CliPrompt\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'League\\CLImate\\' => 15,
        ),
        'H' => 
        array (
            'Hprose\\Swoole\\' => 14,
            'Hprose\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ultraman\\install\\' => 
        array (
            0 => __DIR__ . '/../..' . '/install',
        ),
        'ultraman\\Log\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Log',
        ),
        'ultraman\\Http\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Http',
        ),
        'ultraman\\Foundation\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Foundation',
        ),
        'ultraman\\Exception\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Exception',
        ),
        'ultraman\\Db\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Db',
        ),
        'ultraman\\Common\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Common',
        ),
        'ultraman\\Cache\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Cache',
        ),
        'Seld\\CliPrompt\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/cli-prompt/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'League\\CLImate\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/climate/src',
        ),
        'Hprose\\Swoole\\' => 
        array (
            0 => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole',
        ),
        'Hprose\\' => 
        array (
            0 => __DIR__ . '/..' . '/hprose/hprose/src/Hprose',
        ),
    );

    public static $classMap = array (
        'Hprose\\BytesIO' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/BytesIO.php',
        'Hprose\\ClassManager' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/ClassManager.php',
        'Hprose\\Client' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Client.php',
        'Hprose\\Completer' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Completer.php',
        'Hprose\\Deferred' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Deferred.php',
        'Hprose\\FakeReaderRefer' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/FakeReaderRefer.php',
        'Hprose\\FakeWriterRefer' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/FakeWriterRefer.php',
        'Hprose\\Filter' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Filter.php',
        'Hprose\\Filter\\JSONRPC\\ClientFilter' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Filter/JSONRPC/ClientFilter.php',
        'Hprose\\Filter\\JSONRPC\\ServiceFilter' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Filter/JSONRPC/ServiceFilter.php',
        'Hprose\\Filter\\XMLRPC\\ClientFilter' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Filter/XMLRPC/ClientFilter.php',
        'Hprose\\Filter\\XMLRPC\\ServiceFilter' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Filter/XMLRPC/ServiceFilter.php',
        'Hprose\\Formatter' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Formatter.php',
        'Hprose\\Future' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Future.php',
        'Hprose\\Future\\CallableWrapper' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Future/CallableWrapper.php',
        'Hprose\\Future\\UncatchableException' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Future/UncatchableException.php',
        'Hprose\\Future\\Wrapper' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Future/Wrapper.php',
        'Hprose\\HandlerManager' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/HandlerManager.php',
        'Hprose\\Http\\Client' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Http/Client.php',
        'Hprose\\Http\\Server' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Http/Server.php',
        'Hprose\\Http\\Service' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Http/Service.php',
        'Hprose\\InvokeSettings' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/InvokeSettings.php',
        'Hprose\\Promise' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Promise.php',
        'Hprose\\Proxy' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Proxy.php',
        'Hprose\\RawReader' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/RawReader.php',
        'Hprose\\Reader' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Reader.php',
        'Hprose\\ReaderRefer' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/ReaderRefer.php',
        'Hprose\\RealReaderRefer' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/RealReaderRefer.php',
        'Hprose\\RealWriterRefer' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/RealWriterRefer.php',
        'Hprose\\ResultMode' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/ResultMode.php',
        'Hprose\\Service' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Service.php',
        'Hprose\\Socket\\Client' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Socket/Client.php',
        'Hprose\\Socket\\DataBuffer' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Socket/DataBuffer.php',
        'Hprose\\Socket\\FullDuplexTransporter' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Socket/FullDuplexTransporter.php',
        'Hprose\\Socket\\HalfDuplexTransporter' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Socket/HalfDuplexTransporter.php',
        'Hprose\\Socket\\Server' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Socket/Server.php',
        'Hprose\\Socket\\Service' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Socket/Service.php',
        'Hprose\\Socket\\Timer' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Socket/Timer.php',
        'Hprose\\Socket\\Transporter' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Socket/Transporter.php',
        'Hprose\\Swoole\\Client' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/Client.php',
        'Hprose\\Swoole\\Http\\Client' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/Http/Client.php',
        'Hprose\\Swoole\\Http\\Server' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/Http/Server.php',
        'Hprose\\Swoole\\Http\\Service' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/Http/Service.php',
        'Hprose\\Swoole\\Http\\Transporter' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/Http/Transporter.php',
        'Hprose\\Swoole\\Server' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/Server.php',
        'Hprose\\Swoole\\Socket\\Client' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/Socket/Client.php',
        'Hprose\\Swoole\\Socket\\FullDuplexTransporter' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/Socket/FullDuplexTransporter.php',
        'Hprose\\Swoole\\Socket\\HalfDuplexTransporter' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/Socket/HalfDuplexTransporter.php',
        'Hprose\\Swoole\\Socket\\Server' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/Socket/Server.php',
        'Hprose\\Swoole\\Socket\\Service' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/Socket/Service.php',
        'Hprose\\Swoole\\Socket\\Transporter' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/Socket/Transporter.php',
        'Hprose\\Swoole\\Timer' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/Timer.php',
        'Hprose\\Swoole\\WebSocket\\Client' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/WebSocket/Client.php',
        'Hprose\\Swoole\\WebSocket\\Server' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/WebSocket/Server.php',
        'Hprose\\Swoole\\WebSocket\\Service' => __DIR__ . '/..' . '/hprose/hprose-swoole/src/Hprose/Swoole/WebSocket/Service.php',
        'Hprose\\Tags' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Tags.php',
        'Hprose\\TimeoutException' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/TimeoutException.php',
        'Hprose\\Writer' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/Writer.php',
        'Hprose\\WriterRefer' => __DIR__ . '/..' . '/hprose/hprose/src/Hprose/WriterRefer.php',
        'League\\CLImate\\Argument\\Argument' => __DIR__ . '/..' . '/league/climate/src/Argument/Argument.php',
        'League\\CLImate\\Argument\\Filter' => __DIR__ . '/..' . '/league/climate/src/Argument/Filter.php',
        'League\\CLImate\\Argument\\Manager' => __DIR__ . '/..' . '/league/climate/src/Argument/Manager.php',
        'League\\CLImate\\Argument\\Parser' => __DIR__ . '/..' . '/league/climate/src/Argument/Parser.php',
        'League\\CLImate\\Argument\\Summary' => __DIR__ . '/..' . '/league/climate/src/Argument/Summary.php',
        'League\\CLImate\\CLImate' => __DIR__ . '/..' . '/league/climate/src/CLImate.php',
        'League\\CLImate\\Decorator\\Component\\BackgroundColor' => __DIR__ . '/..' . '/league/climate/src/Decorator/Component/BackgroundColor.php',
        'League\\CLImate\\Decorator\\Component\\BaseDecorator' => __DIR__ . '/..' . '/league/climate/src/Decorator/Component/BaseDecorator.php',
        'League\\CLImate\\Decorator\\Component\\Color' => __DIR__ . '/..' . '/league/climate/src/Decorator/Component/Color.php',
        'League\\CLImate\\Decorator\\Component\\Command' => __DIR__ . '/..' . '/league/climate/src/Decorator/Component/Command.php',
        'League\\CLImate\\Decorator\\Component\\DecoratorInterface' => __DIR__ . '/..' . '/league/climate/src/Decorator/Component/DecoratorInterface.php',
        'League\\CLImate\\Decorator\\Component\\Format' => __DIR__ . '/..' . '/league/climate/src/Decorator/Component/Format.php',
        'League\\CLImate\\Decorator\\Parser\\Ansi' => __DIR__ . '/..' . '/league/climate/src/Decorator/Parser/Ansi.php',
        'League\\CLImate\\Decorator\\Parser\\NonAnsi' => __DIR__ . '/..' . '/league/climate/src/Decorator/Parser/NonAnsi.php',
        'League\\CLImate\\Decorator\\Parser\\Parser' => __DIR__ . '/..' . '/league/climate/src/Decorator/Parser/Parser.php',
        'League\\CLImate\\Decorator\\Parser\\ParserFactory' => __DIR__ . '/..' . '/league/climate/src/Decorator/Parser/ParserFactory.php',
        'League\\CLImate\\Decorator\\Parser\\ParserImporter' => __DIR__ . '/..' . '/league/climate/src/Decorator/Parser/ParserImporter.php',
        'League\\CLImate\\Decorator\\Style' => __DIR__ . '/..' . '/league/climate/src/Decorator/Style.php',
        'League\\CLImate\\Decorator\\Tags' => __DIR__ . '/..' . '/league/climate/src/Decorator/Tags.php',
        'League\\CLImate\\Settings\\Art' => __DIR__ . '/..' . '/league/climate/src/Settings/Art.php',
        'League\\CLImate\\Settings\\Manager' => __DIR__ . '/..' . '/league/climate/src/Settings/Manager.php',
        'League\\CLImate\\Settings\\SettingsImporter' => __DIR__ . '/..' . '/league/climate/src/Settings/SettingsImporter.php',
        'League\\CLImate\\Settings\\SettingsInterface' => __DIR__ . '/..' . '/league/climate/src/Settings/SettingsInterface.php',
        'League\\CLImate\\TerminalObject\\Basic\\BasicTerminalObject' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/BasicTerminalObject.php',
        'League\\CLImate\\TerminalObject\\Basic\\BasicTerminalObjectInterface' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/BasicTerminalObjectInterface.php',
        'League\\CLImate\\TerminalObject\\Basic\\Border' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/Border.php',
        'League\\CLImate\\TerminalObject\\Basic\\Br' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/Br.php',
        'League\\CLImate\\TerminalObject\\Basic\\Clear' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/Clear.php',
        'League\\CLImate\\TerminalObject\\Basic\\Columns' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/Columns.php',
        'League\\CLImate\\TerminalObject\\Basic\\Draw' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/Draw.php',
        'League\\CLImate\\TerminalObject\\Basic\\Dump' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/Dump.php',
        'League\\CLImate\\TerminalObject\\Basic\\Flank' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/Flank.php',
        'League\\CLImate\\TerminalObject\\Basic\\Inline' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/Inline.php',
        'League\\CLImate\\TerminalObject\\Basic\\Json' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/Json.php',
        'League\\CLImate\\TerminalObject\\Basic\\Out' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/Out.php',
        'League\\CLImate\\TerminalObject\\Basic\\Repeatable' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/Repeatable.php',
        'League\\CLImate\\TerminalObject\\Basic\\Tab' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/Tab.php',
        'League\\CLImate\\TerminalObject\\Basic\\Table' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Basic/Table.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\Animation' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/Animation.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\Animation\\Keyframe' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/Animation/Keyframe.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\Checkbox\\Checkbox' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/Checkbox/Checkbox.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\Checkbox\\CheckboxGroup' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/Checkbox/CheckboxGroup.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\Checkbox\\RadioGroup' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/Checkbox/RadioGroup.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\Checkboxes' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/Checkboxes.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\Confirm' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/Confirm.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\DynamicTerminalObject' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/DynamicTerminalObject.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\DynamicTerminalObjectInterface' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/DynamicTerminalObjectInterface.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\Input' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/Input.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\InputAbstract' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/InputAbstract.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\Padding' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/Padding.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\Password' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/Password.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\Progress' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/Progress.php',
        'League\\CLImate\\TerminalObject\\Dynamic\\Radio' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Dynamic/Radio.php',
        'League\\CLImate\\TerminalObject\\Helper\\Art' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Helper/Art.php',
        'League\\CLImate\\TerminalObject\\Helper\\Sleeper' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Helper/Sleeper.php',
        'League\\CLImate\\TerminalObject\\Helper\\SleeperInterface' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Helper/SleeperInterface.php',
        'League\\CLImate\\TerminalObject\\Helper\\StringLength' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Helper/StringLength.php',
        'League\\CLImate\\TerminalObject\\Router\\BaseRouter' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Router/BaseRouter.php',
        'League\\CLImate\\TerminalObject\\Router\\BasicRouter' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Router/BasicRouter.php',
        'League\\CLImate\\TerminalObject\\Router\\DynamicRouter' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Router/DynamicRouter.php',
        'League\\CLImate\\TerminalObject\\Router\\ExtensionCollection' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Router/ExtensionCollection.php',
        'League\\CLImate\\TerminalObject\\Router\\Router' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Router/Router.php',
        'League\\CLImate\\TerminalObject\\Router\\RouterInterface' => __DIR__ . '/..' . '/league/climate/src/TerminalObject/Router/RouterInterface.php',
        'League\\CLImate\\Util\\Cursor' => __DIR__ . '/..' . '/league/climate/src/Util/Cursor.php',
        'League\\CLImate\\Util\\Helper' => __DIR__ . '/..' . '/league/climate/src/Util/Helper.php',
        'League\\CLImate\\Util\\Output' => __DIR__ . '/..' . '/league/climate/src/Util/Output.php',
        'League\\CLImate\\Util\\OutputImporter' => __DIR__ . '/..' . '/league/climate/src/Util/OutputImporter.php',
        'League\\CLImate\\Util\\Reader\\ReaderInterface' => __DIR__ . '/..' . '/league/climate/src/Util/Reader/ReaderInterface.php',
        'League\\CLImate\\Util\\Reader\\Stdin' => __DIR__ . '/..' . '/league/climate/src/Util/Reader/Stdin.php',
        'League\\CLImate\\Util\\System\\Linux' => __DIR__ . '/..' . '/league/climate/src/Util/System/Linux.php',
        'League\\CLImate\\Util\\System\\System' => __DIR__ . '/..' . '/league/climate/src/Util/System/System.php',
        'League\\CLImate\\Util\\System\\SystemFactory' => __DIR__ . '/..' . '/league/climate/src/Util/System/SystemFactory.php',
        'League\\CLImate\\Util\\System\\Windows' => __DIR__ . '/..' . '/league/climate/src/Util/System/Windows.php',
        'League\\CLImate\\Util\\UtilFactory' => __DIR__ . '/..' . '/league/climate/src/Util/UtilFactory.php',
        'League\\CLImate\\Util\\UtilImporter' => __DIR__ . '/..' . '/league/climate/src/Util/UtilImporter.php',
        'League\\CLImate\\Util\\Writer\\Buffer' => __DIR__ . '/..' . '/league/climate/src/Util/Writer/Buffer.php',
        'League\\CLImate\\Util\\Writer\\File' => __DIR__ . '/..' . '/league/climate/src/Util/Writer/File.php',
        'League\\CLImate\\Util\\Writer\\StdErr' => __DIR__ . '/..' . '/league/climate/src/Util/Writer/StdErr.php',
        'League\\CLImate\\Util\\Writer\\StdOut' => __DIR__ . '/..' . '/league/climate/src/Util/Writer/StdOut.php',
        'League\\CLImate\\Util\\Writer\\WriterInterface' => __DIR__ . '/..' . '/league/climate/src/Util/Writer/WriterInterface.php',
        'Monolog\\ErrorHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/ErrorHandler.php',
        'Monolog\\Formatter\\ChromePHPFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php',
        'Monolog\\Formatter\\ElasticaFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php',
        'Monolog\\Formatter\\FlowdockFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php',
        'Monolog\\Formatter\\FluentdFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php',
        'Monolog\\Formatter\\FormatterInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FormatterInterface.php',
        'Monolog\\Formatter\\GelfMessageFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/GelfMessageFormatter.php',
        'Monolog\\Formatter\\HtmlFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php',
        'Monolog\\Formatter\\JsonFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php',
        'Monolog\\Formatter\\LineFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LineFormatter.php',
        'Monolog\\Formatter\\LogglyFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php',
        'Monolog\\Formatter\\LogstashFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php',
        'Monolog\\Formatter\\MongoDBFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php',
        'Monolog\\Formatter\\NormalizerFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/NormalizerFormatter.php',
        'Monolog\\Formatter\\ScalarFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ScalarFormatter.php',
        'Monolog\\Formatter\\WildfireFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php',
        'Monolog\\Handler\\AbstractHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractHandler.php',
        'Monolog\\Handler\\AbstractProcessingHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php',
        'Monolog\\Handler\\AbstractSyslogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php',
        'Monolog\\Handler\\AmqpHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AmqpHandler.php',
        'Monolog\\Handler\\BrowserConsoleHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/BrowserConsoleHandler.php',
        'Monolog\\Handler\\BufferHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/BufferHandler.php',
        'Monolog\\Handler\\ChromePHPHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php',
        'Monolog\\Handler\\CouchDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php',
        'Monolog\\Handler\\CubeHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/CubeHandler.php',
        'Monolog\\Handler\\Curl\\Util' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/Curl/Util.php',
        'Monolog\\Handler\\DeduplicationHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DeduplicationHandler.php',
        'Monolog\\Handler\\DoctrineCouchDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DoctrineCouchDBHandler.php',
        'Monolog\\Handler\\DynamoDbHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php',
        'Monolog\\Handler\\ElasticSearchHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ElasticSearchHandler.php',
        'Monolog\\Handler\\ErrorLogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php',
        'Monolog\\Handler\\FilterHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FilterHandler.php',
        'Monolog\\Handler\\FingersCrossedHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php',
        'Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php',
        'Monolog\\Handler\\FingersCrossed\\ChannelLevelActivationStrategy' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php',
        'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php',
        'Monolog\\Handler\\FirePHPHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php',
        'Monolog\\Handler\\FleepHookHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php',
        'Monolog\\Handler\\FlowdockHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php',
        'Monolog\\Handler\\GelfHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/GelfHandler.php',
        'Monolog\\Handler\\GroupHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/GroupHandler.php',
        'Monolog\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/HandlerInterface.php',
        'Monolog\\Handler\\HandlerWrapper' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php',
        'Monolog\\Handler\\HipChatHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/HipChatHandler.php',
        'Monolog\\Handler\\IFTTTHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php',
        'Monolog\\Handler\\LogEntriesHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php',
        'Monolog\\Handler\\LogglyHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/LogglyHandler.php',
        'Monolog\\Handler\\MailHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MailHandler.php',
        'Monolog\\Handler\\MandrillHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MandrillHandler.php',
        'Monolog\\Handler\\MissingExtensionException' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MissingExtensionException.php',
        'Monolog\\Handler\\MongoDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MongoDBHandler.php',
        'Monolog\\Handler\\NativeMailerHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php',
        'Monolog\\Handler\\NewRelicHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php',
        'Monolog\\Handler\\NullHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NullHandler.php',
        'Monolog\\Handler\\PHPConsoleHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PHPConsoleHandler.php',
        'Monolog\\Handler\\PsrHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PsrHandler.php',
        'Monolog\\Handler\\PushoverHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PushoverHandler.php',
        'Monolog\\Handler\\RavenHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RavenHandler.php',
        'Monolog\\Handler\\RedisHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RedisHandler.php',
        'Monolog\\Handler\\RollbarHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RollbarHandler.php',
        'Monolog\\Handler\\RotatingFileHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php',
        'Monolog\\Handler\\SamplingHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SamplingHandler.php',
        'Monolog\\Handler\\SlackHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SlackHandler.php',
        'Monolog\\Handler\\SlackWebhookHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php',
        'Monolog\\Handler\\Slack\\SlackRecord' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php',
        'Monolog\\Handler\\SlackbotHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SlackbotHandler.php',
        'Monolog\\Handler\\SocketHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SocketHandler.php',
        'Monolog\\Handler\\StreamHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/StreamHandler.php',
        'Monolog\\Handler\\SwiftMailerHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php',
        'Monolog\\Handler\\SyslogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogHandler.php',
        'Monolog\\Handler\\SyslogUdpHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php',
        'Monolog\\Handler\\SyslogUdp\\UdpSocket' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php',
        'Monolog\\Handler\\TestHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/TestHandler.php',
        'Monolog\\Handler\\WhatFailureGroupHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/WhatFailureGroupHandler.php',
        'Monolog\\Handler\\ZendMonitorHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php',
        'Monolog\\Logger' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Logger.php',
        'Monolog\\Processor\\GitProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/GitProcessor.php',
        'Monolog\\Processor\\IntrospectionProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php',
        'Monolog\\Processor\\MemoryPeakUsageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryPeakUsageProcessor.php',
        'Monolog\\Processor\\MemoryProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php',
        'Monolog\\Processor\\MemoryUsageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryUsageProcessor.php',
        'Monolog\\Processor\\MercurialProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php',
        'Monolog\\Processor\\ProcessIdProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/ProcessIdProcessor.php',
        'Monolog\\Processor\\PsrLogMessageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php',
        'Monolog\\Processor\\TagProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/TagProcessor.php',
        'Monolog\\Processor\\UidProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/UidProcessor.php',
        'Monolog\\Processor\\WebProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/WebProcessor.php',
        'Monolog\\Registry' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Registry.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Seld\\CliPrompt\\CliPrompt' => __DIR__ . '/..' . '/seld/cli-prompt/src/CliPrompt.php',
        'ultraman\\Cache\\Redis' => __DIR__ . '/../..' . '/Cache/Redis.php',
        'ultraman\\Common\\CommonFun' => __DIR__ . '/../..' . '/Common/CommonFun.php',
        'ultraman\\Common\\DataValidator' => __DIR__ . '/../..' . '/Common/DataValidator.php',
        'ultraman\\Db\\DbTransaction' => __DIR__ . '/../..' . '/Db/DbTransaction.php',
        'ultraman\\Db\\Model' => __DIR__ . '/../..' . '/Db/Model.php',
        'ultraman\\Exception\\BaseException' => __DIR__ . '/../..' . '/Exception/BaseException.php',
        'ultraman\\Exception\\Exception' => __DIR__ . '/../..' . '/Exception/Exception.php',
        'ultraman\\Foundation\\Container' => __DIR__ . '/../..' . '/Foundation/Container.php',
        'ultraman\\Foundation\\DI' => __DIR__ . '/../..' . '/Foundation/DI.php',
        'ultraman\\Foundation\\Ecode' => __DIR__ . '/../..' . '/Foundation/Ecode.php',
        'ultraman\\Foundation\\Enumeration' => __DIR__ . '/../..' . '/Foundation/Enumeration.php',
        'ultraman\\Foundation\\Response' => __DIR__ . '/../..' . '/Foundation/Response.php',
        'ultraman\\Http\\Http' => __DIR__ . '/../..' . '/Http/Http.php',
        'ultraman\\Http\\SwooleHttpServer' => __DIR__ . '/../..' . '/Http/HttpServer.php',
        'ultraman\\Log\\monoLog' => __DIR__ . '/../..' . '/Log/monoLog.php',
        'ultraman\\install\\yaf\\Installer' => __DIR__ . '/../..' . '/install/yaf/Installer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd67feed0f16b3434232cf7c67f637120::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd67feed0f16b3434232cf7c67f637120::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd67feed0f16b3434232cf7c67f637120::$classMap;

        }, null, ClassLoader::class);
    }
}
