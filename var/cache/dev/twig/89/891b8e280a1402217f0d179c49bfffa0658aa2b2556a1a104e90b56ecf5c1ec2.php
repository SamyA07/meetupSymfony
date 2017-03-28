<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4374d80b1c28ea19892f9ca61b7421b8737ebfe7eaa7c9c830615e313086e4b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fecdccac3b1b4d2cd9f80a2e3a0930d71a7cbd4e175fd0fff0bdc33320a4a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fecdccac3b1b4d2cd9f80a2e3a0930d71a7cbd4e175fd0fff0bdc33320a4a12->enter($__internal_6fecdccac3b1b4d2cd9f80a2e3a0930d71a7cbd4e175fd0fff0bdc33320a4a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_66630763f852f711c005eb87892b1a98dbdf55e0fa0e19507a2a3a5b8af0a658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66630763f852f711c005eb87892b1a98dbdf55e0fa0e19507a2a3a5b8af0a658->enter($__internal_66630763f852f711c005eb87892b1a98dbdf55e0fa0e19507a2a3a5b8af0a658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fecdccac3b1b4d2cd9f80a2e3a0930d71a7cbd4e175fd0fff0bdc33320a4a12->leave($__internal_6fecdccac3b1b4d2cd9f80a2e3a0930d71a7cbd4e175fd0fff0bdc33320a4a12_prof);

        
        $__internal_66630763f852f711c005eb87892b1a98dbdf55e0fa0e19507a2a3a5b8af0a658->leave($__internal_66630763f852f711c005eb87892b1a98dbdf55e0fa0e19507a2a3a5b8af0a658_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3928dbfe4d7ea5839a27c4546f885ca31e75efffecca8498b0c60b36b21be4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3928dbfe4d7ea5839a27c4546f885ca31e75efffecca8498b0c60b36b21be4bb->enter($__internal_3928dbfe4d7ea5839a27c4546f885ca31e75efffecca8498b0c60b36b21be4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_70837c0182df42d38e2f5c58ce2af908ecf4891e286e53715f1a30f9466c9cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70837c0182df42d38e2f5c58ce2af908ecf4891e286e53715f1a30f9466c9cb5->enter($__internal_70837c0182df42d38e2f5c58ce2af908ecf4891e286e53715f1a30f9466c9cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_70837c0182df42d38e2f5c58ce2af908ecf4891e286e53715f1a30f9466c9cb5->leave($__internal_70837c0182df42d38e2f5c58ce2af908ecf4891e286e53715f1a30f9466c9cb5_prof);

        
        $__internal_3928dbfe4d7ea5839a27c4546f885ca31e75efffecca8498b0c60b36b21be4bb->leave($__internal_3928dbfe4d7ea5839a27c4546f885ca31e75efffecca8498b0c60b36b21be4bb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
