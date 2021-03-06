<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_7b7515ea65ce5fd2c2cf2350b14c109004010eac7ab979815bb0c51c44ed4072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1e5150d78e647a46534ba576c74b77b940ca246bde2120bc1c5fcd27287f1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e5150d78e647a46534ba576c74b77b940ca246bde2120bc1c5fcd27287f1e6->enter($__internal_c1e5150d78e647a46534ba576c74b77b940ca246bde2120bc1c5fcd27287f1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_2dde6be07ee0f38626b6f416bb979d5a534097baafcd7bf5c02df832aefd9b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dde6be07ee0f38626b6f416bb979d5a534097baafcd7bf5c02df832aefd9b99->enter($__internal_2dde6be07ee0f38626b6f416bb979d5a534097baafcd7bf5c02df832aefd9b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1e5150d78e647a46534ba576c74b77b940ca246bde2120bc1c5fcd27287f1e6->leave($__internal_c1e5150d78e647a46534ba576c74b77b940ca246bde2120bc1c5fcd27287f1e6_prof);

        
        $__internal_2dde6be07ee0f38626b6f416bb979d5a534097baafcd7bf5c02df832aefd9b99->leave($__internal_2dde6be07ee0f38626b6f416bb979d5a534097baafcd7bf5c02df832aefd9b99_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5e1295ee030dcad49eab27535e7d0dd7e51e2f2cdb1a16e65f2d2443416db0a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1295ee030dcad49eab27535e7d0dd7e51e2f2cdb1a16e65f2d2443416db0a0->enter($__internal_5e1295ee030dcad49eab27535e7d0dd7e51e2f2cdb1a16e65f2d2443416db0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_96e3943a1564e2c46f28818bac155ef0790ca025bd744e88fd5774f079950132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e3943a1564e2c46f28818bac155ef0790ca025bd744e88fd5774f079950132->enter($__internal_96e3943a1564e2c46f28818bac155ef0790ca025bd744e88fd5774f079950132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_96e3943a1564e2c46f28818bac155ef0790ca025bd744e88fd5774f079950132->leave($__internal_96e3943a1564e2c46f28818bac155ef0790ca025bd744e88fd5774f079950132_prof);

        
        $__internal_5e1295ee030dcad49eab27535e7d0dd7e51e2f2cdb1a16e65f2d2443416db0a0->leave($__internal_5e1295ee030dcad49eab27535e7d0dd7e51e2f2cdb1a16e65f2d2443416db0a0_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2664c4cd1aff72640a31ab3a929688de479472f7417a4ba53d5fc8a19c8880fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2664c4cd1aff72640a31ab3a929688de479472f7417a4ba53d5fc8a19c8880fe->enter($__internal_2664c4cd1aff72640a31ab3a929688de479472f7417a4ba53d5fc8a19c8880fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c88769bef3c1faa06639847281dad3cbefea1f4326c4b545a06ef35adb031b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88769bef3c1faa06639847281dad3cbefea1f4326c4b545a06ef35adb031b55->enter($__internal_c88769bef3c1faa06639847281dad3cbefea1f4326c4b545a06ef35adb031b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c88769bef3c1faa06639847281dad3cbefea1f4326c4b545a06ef35adb031b55->leave($__internal_c88769bef3c1faa06639847281dad3cbefea1f4326c4b545a06ef35adb031b55_prof);

        
        $__internal_2664c4cd1aff72640a31ab3a929688de479472f7417a4ba53d5fc8a19c8880fe->leave($__internal_2664c4cd1aff72640a31ab3a929688de479472f7417a4ba53d5fc8a19c8880fe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
