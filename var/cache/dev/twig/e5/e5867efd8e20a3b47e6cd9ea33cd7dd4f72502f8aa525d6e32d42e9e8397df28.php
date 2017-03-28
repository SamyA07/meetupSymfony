<?php

/* ApiPlatformBundle:SwaggerUi:index.html.twig */
class __TwigTemplate_3a24730f60c82b52ca1c56617b73e3917d790e33188e3aa6e6bfd55b1039a21c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a616744d7d908103675c8aeaf57f9b7e3c984476bb0bdf50ec12c07d422f09ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a616744d7d908103675c8aeaf57f9b7e3c984476bb0bdf50ec12c07d422f09ec->enter($__internal_a616744d7d908103675c8aeaf57f9b7e3c984476bb0bdf50ec12c07d422f09ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApiPlatformBundle:SwaggerUi:index.html.twig"));

        $__internal_f756238fc53ee5577db86f951a6817335553eb7647e85e8f4bfb8ad93ec3a57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f756238fc53ee5577db86f951a6817335553eb7647e85e8f4bfb8ad93ec3a57a->enter($__internal_f756238fc53ee5577db86f951a6817335553eb7647e85e8f4bfb8ad93ec3a57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApiPlatformBundle:SwaggerUi:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        if ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 5, $this->getSourceContext()); })())) {
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
            echo " - ";
        }
        echo "API Platform</title>

    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/css/typography.css"), "html", null, true);
        echo "\" media=\"screen\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/css/reset.css"), "html", null, true);
        echo "\" media=\"screen\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/css/screen.css"), "html", null, true);
        echo "\" media=\"screen\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/css/reset.css"), "html", null, true);
        echo "\" media=\"print\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/css/print.css"), "html", null, true);
        echo "\" media=\"print\" rel=\"stylesheet\">

    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/lib/object-assign-pollyfill.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/lib/jquery-1.8.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/lib/jquery.slideto.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/lib/jquery.wiggle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/lib/jquery.ba-bbq.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/lib/handlebars-4.0.5.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/lib/lodash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/lib/backbone-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/swagger-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/lib/highlight.9.1.0.pack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/lib/jsoneditor.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/lib/marked.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/lib/swagger-oauth.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function () {
            window.swaggerUi = new SwaggerUi({
                url: '";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_doc", array("_format" => "json"));
        echo "',
                spec: ";
        // line 31
        echo twig_replace_filter((isset($context["spec"]) || array_key_exists("spec", $context) ? $context["spec"] : (function () { throw new Twig_Error_Runtime('Variable "spec" does not exist.', 31, $this->getSourceContext()); })()), array("<" => "u003c"));
        echo ",
                dom_id: 'swagger-ui-container',
                supportedSubmitMethods: ['get', 'post', 'put', 'delete'],
                onComplete: function() {
                    \$('pre code').each(function(i, e) {
                        hljs.highlightBlock(e)
                    });

                    ";
        // line 39
        if ( !(null === (isset($context["operationId"]) || array_key_exists("operationId", $context) ? $context["operationId"] : (function () { throw new Twig_Error_Runtime('Variable "operationId" does not exist.', 39, $this->getSourceContext()); })()))) {
            // line 40
            echo "                        ";
            $context["domId"] = (((isset($context["shortName"]) || array_key_exists("shortName", $context) ? $context["shortName"] : (function () { throw new Twig_Error_Runtime('Variable "shortName" does not exist.', 40, $this->getSourceContext()); })()) . "_") . (isset($context["operationId"]) || array_key_exists("operationId", $context) ? $context["operationId"] : (function () { throw new Twig_Error_Runtime('Variable "operationId" does not exist.', 40, $this->getSourceContext()); })()));
            // line 41
            echo "                        ";
            $context["id"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "id"), "method");
            // line 42
            echo "
                        var queryParameters = ";
            // line 43
            echo twig_replace_filter(json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->getSourceContext()); })()), "request", array()), "query", array()), "all", array(), "method")), array("<" => "u003c"));
            echo ";
                        \$('#";
            // line 44
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["domId"]) || array_key_exists("domId", $context) ? $context["domId"] : (function () { throw new Twig_Error_Runtime('Variable "domId" does not exist.', 44, $this->getSourceContext()); })()), "js"), "html", null, true);
            echo " form.sandbox input.parameter').each(function (i, e) {
                            var \$e = \$(e);
                            var name = \$e.attr('name');

                            if (name in queryParameters) {
                                \$e.val(queryParameters[name]);
                            }
                        });

                        ";
            // line 53
            if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())) {
                // line 54
                echo "                            \$('#";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["domId"]) || array_key_exists("domId", $context) ? $context["domId"] : (function () { throw new Twig_Error_Runtime('Variable "domId" does not exist.', 54, $this->getSourceContext()); })()), "js"), "html", null, true);
                echo " form.sandbox input[name=\"id\"]').val('";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 54, $this->getSourceContext()); })()), "js"), "html", null, true);
                echo "');
                        ";
            }
            // line 56
            echo "
                        \$('#";
            // line 57
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["domId"]) || array_key_exists("domId", $context) ? $context["domId"] : (function () { throw new Twig_Error_Runtime('Variable "domId" does not exist.', 57, $this->getSourceContext()); })()), "js"), "html", null, true);
            echo " form.sandbox').submit();
                        document.location.hash = '#!/";
            // line 58
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["shortName"]) || array_key_exists("shortName", $context) ? $context["shortName"] : (function () { throw new Twig_Error_Runtime('Variable "shortName" does not exist.', 58, $this->getSourceContext()); })()), "js"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["operationId"]) || array_key_exists("operationId", $context) ? $context["operationId"] : (function () { throw new Twig_Error_Runtime('Variable "operationId" does not exist.', 58, $this->getSourceContext()); })()), "js"), "html", null, true);
            echo "';
                    ";
        }
        // line 60
        echo "                },
                onFailure: function() {
                    log('Unable to Load SwaggerUI');
                },
                docExpansion: 'list',
                jsonEditor: false,
                defaultModelRendering: 'schema',
                showRequestHeaders: true
            });

            window.swaggerUi.load();

            function log() {
                if ('console' in window) {
                    console.log.apply(console, arguments);
                }
            }
        });
    </script>
</head>

<body class=\"swagger-section\">
<div id=\"header\" style=\"background-color: #253032; height: 35px\">
    <div class=\"swagger-ui-wrap\">
        <a id=\"logo\" href=\"https://api-platform.com\"><img height=\"48\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/logo-header.svg"), "html", null, true);
        echo "\" alt=\"API Platform\" style=\"position: relative; right: 10px\"></a>
    </div>
</div>

<div id=\"message-bar\" class=\"swagger-ui-wrap\" data-sw-translate>&nbsp;</div>
<div id=\"swagger-ui-container\" class=\"swagger-ui-wrap\"></div>

<div class=\"swagger-ui-wrap\">
    <div class=\"container\">
        <div id=\"formats\" class=\"footer\" style=\"text-align: right\">
            Available formats:
            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["formats"]) || array_key_exists("formats", $context) ? $context["formats"] : (function () { throw new Twig_Error_Runtime('Variable "formats" does not exist.', 95, $this->getSourceContext()); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
            // line 96
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 96, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 96, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_format" => $context["format"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["format"], "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        </div>
    </div>
</div>

</body>
</html>
";
        
        $__internal_a616744d7d908103675c8aeaf57f9b7e3c984476bb0bdf50ec12c07d422f09ec->leave($__internal_a616744d7d908103675c8aeaf57f9b7e3c984476bb0bdf50ec12c07d422f09ec_prof);

        
        $__internal_f756238fc53ee5577db86f951a6817335553eb7647e85e8f4bfb8ad93ec3a57a->leave($__internal_f756238fc53ee5577db86f951a6817335553eb7647e85e8f4bfb8ad93ec3a57a_prof);

    }

    public function getTemplateName()
    {
        return "ApiPlatformBundle:SwaggerUi:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 98,  226 => 96,  222 => 95,  208 => 84,  182 => 60,  175 => 58,  171 => 57,  168 => 56,  160 => 54,  158 => 53,  146 => 44,  142 => 43,  139 => 42,  136 => 41,  133 => 40,  131 => 39,  120 => 31,  116 => 30,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% if title %}{{ title }} - {% endif %}API Platform</title>

    <link href=\"{{ asset('bundles/apiplatform/swagger-ui/css/typography.css') }}\" media=\"screen\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/apiplatform/swagger-ui/css/reset.css') }}\" media=\"screen\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/apiplatform/swagger-ui/css/screen.css') }}\" media=\"screen\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/apiplatform/swagger-ui/css/reset.css') }}\" media=\"print\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/apiplatform/swagger-ui/css/print.css') }}\" media=\"print\" rel=\"stylesheet\">

    <script src=\"{{ asset('bundles/apiplatform/swagger-ui/lib/object-assign-pollyfill.js') }}\"></script>
    <script src=\"{{ asset('bundles/apiplatform/swagger-ui/lib/jquery-1.8.0.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/apiplatform/swagger-ui/lib/jquery.slideto.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/apiplatform/swagger-ui/lib/jquery.wiggle.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/apiplatform/swagger-ui/lib/jquery.ba-bbq.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/apiplatform/swagger-ui/lib/handlebars-4.0.5.js') }}\"></script>
    <script src=\"{{ asset('bundles/apiplatform/swagger-ui/lib/lodash.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/apiplatform/swagger-ui/lib/backbone-min.js') }}\"></script>
    <script src=\"{{ asset('bundles/apiplatform/swagger-ui/swagger-ui.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/apiplatform/swagger-ui/lib/highlight.9.1.0.pack.js') }}\"></script>
    <script src=\"{{ asset('bundles/apiplatform/swagger-ui/lib/jsoneditor.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/apiplatform/swagger-ui/lib/marked.js') }}\"></script>
    <script src=\"{{ asset('bundles/apiplatform/swagger-ui/lib/swagger-oauth.js') }}\"></script>

    <script>
        \$(function () {
            window.swaggerUi = new SwaggerUi({
                url: '{{ path('api_doc', {'_format': 'json'} ) }}',
                spec: {{ spec|replace({'<': '\\u003c'})|raw }},
                dom_id: 'swagger-ui-container',
                supportedSubmitMethods: ['get', 'post', 'put', 'delete'],
                onComplete: function() {
                    \$('pre code').each(function(i, e) {
                        hljs.highlightBlock(e)
                    });

                    {% if operationId is not null %}
                        {% set domId = shortName ~ '_' ~ operationId %}
                        {% set id = app.request.attributes.get('id') %}

                        var queryParameters = {{ app.request.query.all()|json_encode|replace({'<': '\\u003c'})|raw }};
                        \$('#{{ domId|escape('js') }} form.sandbox input.parameter').each(function (i, e) {
                            var \$e = \$(e);
                            var name = \$e.attr('name');

                            if (name in queryParameters) {
                                \$e.val(queryParameters[name]);
                            }
                        });

                        {% if id %}
                            \$('#{{ domId|escape('js') }} form.sandbox input[name=\"id\"]').val('{{ id|escape('js') }}');
                        {% endif %}

                        \$('#{{ domId|escape('js') }} form.sandbox').submit();
                        document.location.hash = '#!/{{ shortName|escape('js') }}/{{ operationId|escape('js') }}';
                    {% endif %}
                },
                onFailure: function() {
                    log('Unable to Load SwaggerUI');
                },
                docExpansion: 'list',
                jsonEditor: false,
                defaultModelRendering: 'schema',
                showRequestHeaders: true
            });

            window.swaggerUi.load();

            function log() {
                if ('console' in window) {
                    console.log.apply(console, arguments);
                }
            }
        });
    </script>
</head>

<body class=\"swagger-section\">
<div id=\"header\" style=\"background-color: #253032; height: 35px\">
    <div class=\"swagger-ui-wrap\">
        <a id=\"logo\" href=\"https://api-platform.com\"><img height=\"48\" src=\"{{ asset('bundles/apiplatform/logo-header.svg') }}\" alt=\"API Platform\" style=\"position: relative; right: 10px\"></a>
    </div>
</div>

<div id=\"message-bar\" class=\"swagger-ui-wrap\" data-sw-translate>&nbsp;</div>
<div id=\"swagger-ui-container\" class=\"swagger-ui-wrap\"></div>

<div class=\"swagger-ui-wrap\">
    <div class=\"container\">
        <div id=\"formats\" class=\"footer\" style=\"text-align: right\">
            Available formats:
            {% for format in formats|keys %}
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge({'_format': format})) }}\">{{ format }}</a>
            {% endfor %}
        </div>
    </div>
</div>

</body>
</html>
", "ApiPlatformBundle:SwaggerUi:index.html.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views/SwaggerUi/index.html.twig");
    }
}
