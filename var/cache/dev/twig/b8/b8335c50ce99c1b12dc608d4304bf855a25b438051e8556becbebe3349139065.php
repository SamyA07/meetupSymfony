<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_de6efc14ab1a62deaf06eede932e75e835399205f93629e4ec3c93bf4d1a8410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f7a4686d2407822ae9eb88c7dbee018f6affdf5e2136208548879857800361b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7a4686d2407822ae9eb88c7dbee018f6affdf5e2136208548879857800361b->enter($__internal_7f7a4686d2407822ae9eb88c7dbee018f6affdf5e2136208548879857800361b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_34241bd7996d5518421980fa2c903e9b9f26e9e08820e2e6d83493ddb635c5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34241bd7996d5518421980fa2c903e9b9f26e9e08820e2e6d83493ddb635c5ec->enter($__internal_34241bd7996d5518421980fa2c903e9b9f26e9e08820e2e6d83493ddb635c5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f7a4686d2407822ae9eb88c7dbee018f6affdf5e2136208548879857800361b->leave($__internal_7f7a4686d2407822ae9eb88c7dbee018f6affdf5e2136208548879857800361b_prof);

        
        $__internal_34241bd7996d5518421980fa2c903e9b9f26e9e08820e2e6d83493ddb635c5ec->leave($__internal_34241bd7996d5518421980fa2c903e9b9f26e9e08820e2e6d83493ddb635c5ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9597c41b0500319513242451721702a51ba02b0b39ff3875fde287037b6b614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9597c41b0500319513242451721702a51ba02b0b39ff3875fde287037b6b614->enter($__internal_d9597c41b0500319513242451721702a51ba02b0b39ff3875fde287037b6b614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3d8bb8677fffa695b94872a2e71b4564f672191f56f87b5ff3ccd1196cf7c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d8bb8677fffa695b94872a2e71b4564f672191f56f87b5ff3ccd1196cf7c2a->enter($__internal_d3d8bb8677fffa695b94872a2e71b4564f672191f56f87b5ff3ccd1196cf7c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d3d8bb8677fffa695b94872a2e71b4564f672191f56f87b5ff3ccd1196cf7c2a->leave($__internal_d3d8bb8677fffa695b94872a2e71b4564f672191f56f87b5ff3ccd1196cf7c2a_prof);

        
        $__internal_d9597c41b0500319513242451721702a51ba02b0b39ff3875fde287037b6b614->leave($__internal_d9597c41b0500319513242451721702a51ba02b0b39ff3875fde287037b6b614_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_16086e429e1760d85001514a3f84fedeb9c1a384621118c601a34cd7f4ea29e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16086e429e1760d85001514a3f84fedeb9c1a384621118c601a34cd7f4ea29e0->enter($__internal_16086e429e1760d85001514a3f84fedeb9c1a384621118c601a34cd7f4ea29e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cbcf85d163456495405c95e6259ff6588438a5ea7297fbb82b9e9d4c50c6b0e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbcf85d163456495405c95e6259ff6588438a5ea7297fbb82b9e9d4c50c6b0e6->enter($__internal_cbcf85d163456495405c95e6259ff6588438a5ea7297fbb82b9e9d4c50c6b0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_cbcf85d163456495405c95e6259ff6588438a5ea7297fbb82b9e9d4c50c6b0e6->leave($__internal_cbcf85d163456495405c95e6259ff6588438a5ea7297fbb82b9e9d4c50c6b0e6_prof);

        
        $__internal_16086e429e1760d85001514a3f84fedeb9c1a384621118c601a34cd7f4ea29e0->leave($__internal_16086e429e1760d85001514a3f84fedeb9c1a384621118c601a34cd7f4ea29e0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_92631e3c263bfc081ac0550d081cd7359fa0aa1d270cc5d0afcc97ba4d90606a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92631e3c263bfc081ac0550d081cd7359fa0aa1d270cc5d0afcc97ba4d90606a->enter($__internal_92631e3c263bfc081ac0550d081cd7359fa0aa1d270cc5d0afcc97ba4d90606a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ee94807748576553d0346ded381d6d401af3fd6d7b1b06a476156323ff9be07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee94807748576553d0346ded381d6d401af3fd6d7b1b06a476156323ff9be07->enter($__internal_6ee94807748576553d0346ded381d6d401af3fd6d7b1b06a476156323ff9be07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6ee94807748576553d0346ded381d6d401af3fd6d7b1b06a476156323ff9be07->leave($__internal_6ee94807748576553d0346ded381d6d401af3fd6d7b1b06a476156323ff9be07_prof);

        
        $__internal_92631e3c263bfc081ac0550d081cd7359fa0aa1d270cc5d0afcc97ba4d90606a->leave($__internal_92631e3c263bfc081ac0550d081cd7359fa0aa1d270cc5d0afcc97ba4d90606a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
