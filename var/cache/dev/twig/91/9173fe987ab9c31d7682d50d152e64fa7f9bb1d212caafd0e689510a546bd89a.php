<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_68dcf10749fbcbfdfc8432a5f57547ddbc4cd1f2c57d8b52e076cfbcc0f06206 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_72c97967ebe7bf7386b815b679b5c26a0f9b4577b7e09ce99151f76b440e8371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c97967ebe7bf7386b815b679b5c26a0f9b4577b7e09ce99151f76b440e8371->enter($__internal_72c97967ebe7bf7386b815b679b5c26a0f9b4577b7e09ce99151f76b440e8371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1c1a1dac68cb100ddc16b8d9f3f44a7af369a8e8cf711fad6e81f4e6ec4a06d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1a1dac68cb100ddc16b8d9f3f44a7af369a8e8cf711fad6e81f4e6ec4a06d6->enter($__internal_1c1a1dac68cb100ddc16b8d9f3f44a7af369a8e8cf711fad6e81f4e6ec4a06d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72c97967ebe7bf7386b815b679b5c26a0f9b4577b7e09ce99151f76b440e8371->leave($__internal_72c97967ebe7bf7386b815b679b5c26a0f9b4577b7e09ce99151f76b440e8371_prof);

        
        $__internal_1c1a1dac68cb100ddc16b8d9f3f44a7af369a8e8cf711fad6e81f4e6ec4a06d6->leave($__internal_1c1a1dac68cb100ddc16b8d9f3f44a7af369a8e8cf711fad6e81f4e6ec4a06d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a53d184d8051719ead4fd66daa38aec0640143b6107aabe373da64c7db1cd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a53d184d8051719ead4fd66daa38aec0640143b6107aabe373da64c7db1cd8b->enter($__internal_7a53d184d8051719ead4fd66daa38aec0640143b6107aabe373da64c7db1cd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c1c07e10adcaf80d1e1579749c6cf0d78253415a681097f2c8223ce11da54dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c07e10adcaf80d1e1579749c6cf0d78253415a681097f2c8223ce11da54dad->enter($__internal_c1c07e10adcaf80d1e1579749c6cf0d78253415a681097f2c8223ce11da54dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c1c07e10adcaf80d1e1579749c6cf0d78253415a681097f2c8223ce11da54dad->leave($__internal_c1c07e10adcaf80d1e1579749c6cf0d78253415a681097f2c8223ce11da54dad_prof);

        
        $__internal_7a53d184d8051719ead4fd66daa38aec0640143b6107aabe373da64c7db1cd8b->leave($__internal_7a53d184d8051719ead4fd66daa38aec0640143b6107aabe373da64c7db1cd8b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84bc21860a200ef2b63477e2619edc973abe535d4a2019ec0f4708f1cd0b2104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bc21860a200ef2b63477e2619edc973abe535d4a2019ec0f4708f1cd0b2104->enter($__internal_84bc21860a200ef2b63477e2619edc973abe535d4a2019ec0f4708f1cd0b2104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f03237d98e2560eb261bf79a73076a1fa580495f9e3712487ca9f99de406e001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03237d98e2560eb261bf79a73076a1fa580495f9e3712487ca9f99de406e001->enter($__internal_f03237d98e2560eb261bf79a73076a1fa580495f9e3712487ca9f99de406e001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f03237d98e2560eb261bf79a73076a1fa580495f9e3712487ca9f99de406e001->leave($__internal_f03237d98e2560eb261bf79a73076a1fa580495f9e3712487ca9f99de406e001_prof);

        
        $__internal_84bc21860a200ef2b63477e2619edc973abe535d4a2019ec0f4708f1cd0b2104->leave($__internal_84bc21860a200ef2b63477e2619edc973abe535d4a2019ec0f4708f1cd0b2104_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7412ce54503d695e1ed4cb92f2ba8d8ab2ad23f0a859376f62c307b48909ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7412ce54503d695e1ed4cb92f2ba8d8ab2ad23f0a859376f62c307b48909ef5->enter($__internal_e7412ce54503d695e1ed4cb92f2ba8d8ab2ad23f0a859376f62c307b48909ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_01036c3bb0146cd2b2aa5c2e340025954ee6c9991e900609b1882660da403d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01036c3bb0146cd2b2aa5c2e340025954ee6c9991e900609b1882660da403d08->enter($__internal_01036c3bb0146cd2b2aa5c2e340025954ee6c9991e900609b1882660da403d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_01036c3bb0146cd2b2aa5c2e340025954ee6c9991e900609b1882660da403d08->leave($__internal_01036c3bb0146cd2b2aa5c2e340025954ee6c9991e900609b1882660da403d08_prof);

        
        $__internal_e7412ce54503d695e1ed4cb92f2ba8d8ab2ad23f0a859376f62c307b48909ef5->leave($__internal_e7412ce54503d695e1ed4cb92f2ba8d8ab2ad23f0a859376f62c307b48909ef5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
