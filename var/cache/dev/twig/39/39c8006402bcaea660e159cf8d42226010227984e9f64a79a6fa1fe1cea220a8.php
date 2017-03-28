<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_43c88f2387885de758eb9736a172f8e2ba5c2acf90722011df0f2c4eb911130c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b33f3b5e7f58438bc3bad7a0682710e39bb7d46a8be0927f7c6fe9c08fd951d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33f3b5e7f58438bc3bad7a0682710e39bb7d46a8be0927f7c6fe9c08fd951d7->enter($__internal_b33f3b5e7f58438bc3bad7a0682710e39bb7d46a8be0927f7c6fe9c08fd951d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_80220bc6a76e05a450a772d4395f138a24d04afc59adb615d00112f0ee46007f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80220bc6a76e05a450a772d4395f138a24d04afc59adb615d00112f0ee46007f->enter($__internal_80220bc6a76e05a450a772d4395f138a24d04afc59adb615d00112f0ee46007f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b33f3b5e7f58438bc3bad7a0682710e39bb7d46a8be0927f7c6fe9c08fd951d7->leave($__internal_b33f3b5e7f58438bc3bad7a0682710e39bb7d46a8be0927f7c6fe9c08fd951d7_prof);

        
        $__internal_80220bc6a76e05a450a772d4395f138a24d04afc59adb615d00112f0ee46007f->leave($__internal_80220bc6a76e05a450a772d4395f138a24d04afc59adb615d00112f0ee46007f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c6e399d852889406c4c726711301078625d9c9d121af1a44e3ec1c8fb109ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6e399d852889406c4c726711301078625d9c9d121af1a44e3ec1c8fb109ec1->enter($__internal_2c6e399d852889406c4c726711301078625d9c9d121af1a44e3ec1c8fb109ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3f8adf5173f48dab9aa5e8c8676b461b265041284441ec2d62004212a17f4209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8adf5173f48dab9aa5e8c8676b461b265041284441ec2d62004212a17f4209->enter($__internal_3f8adf5173f48dab9aa5e8c8676b461b265041284441ec2d62004212a17f4209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3f8adf5173f48dab9aa5e8c8676b461b265041284441ec2d62004212a17f4209->leave($__internal_3f8adf5173f48dab9aa5e8c8676b461b265041284441ec2d62004212a17f4209_prof);

        
        $__internal_2c6e399d852889406c4c726711301078625d9c9d121af1a44e3ec1c8fb109ec1->leave($__internal_2c6e399d852889406c4c726711301078625d9c9d121af1a44e3ec1c8fb109ec1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dda66555fec225d34881d3ee0941f7ce439865a2e3e563513d6b589cfce7191a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda66555fec225d34881d3ee0941f7ce439865a2e3e563513d6b589cfce7191a->enter($__internal_dda66555fec225d34881d3ee0941f7ce439865a2e3e563513d6b589cfce7191a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_760478262f5c6052f2ff6cc9a26b42047a1deb6a1777da39c3d50de73303e7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760478262f5c6052f2ff6cc9a26b42047a1deb6a1777da39c3d50de73303e7eb->enter($__internal_760478262f5c6052f2ff6cc9a26b42047a1deb6a1777da39c3d50de73303e7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_760478262f5c6052f2ff6cc9a26b42047a1deb6a1777da39c3d50de73303e7eb->leave($__internal_760478262f5c6052f2ff6cc9a26b42047a1deb6a1777da39c3d50de73303e7eb_prof);

        
        $__internal_dda66555fec225d34881d3ee0941f7ce439865a2e3e563513d6b589cfce7191a->leave($__internal_dda66555fec225d34881d3ee0941f7ce439865a2e3e563513d6b589cfce7191a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2b3af38dc40dff531fb9116d866126266c37ba4848aa2f94476eaa9320b0412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b3af38dc40dff531fb9116d866126266c37ba4848aa2f94476eaa9320b0412->enter($__internal_e2b3af38dc40dff531fb9116d866126266c37ba4848aa2f94476eaa9320b0412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2bd2345147bc01006b43eb09791cb32b2475a1d30469d16b8f61ad18f8434e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd2345147bc01006b43eb09791cb32b2475a1d30469d16b8f61ad18f8434e84->enter($__internal_2bd2345147bc01006b43eb09791cb32b2475a1d30469d16b8f61ad18f8434e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2bd2345147bc01006b43eb09791cb32b2475a1d30469d16b8f61ad18f8434e84->leave($__internal_2bd2345147bc01006b43eb09791cb32b2475a1d30469d16b8f61ad18f8434e84_prof);

        
        $__internal_e2b3af38dc40dff531fb9116d866126266c37ba4848aa2f94476eaa9320b0412->leave($__internal_e2b3af38dc40dff531fb9116d866126266c37ba4848aa2f94476eaa9320b0412_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
