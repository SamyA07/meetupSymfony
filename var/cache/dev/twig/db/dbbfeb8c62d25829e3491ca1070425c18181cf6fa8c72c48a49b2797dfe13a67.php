<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_3aceea30897c557e889f915e421bc2b13ec56a181b0106b74593b1cb7fc4de6c extends Twig_Template
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
        $__internal_7f778b8123f9b0ac26a603ea7b8db1bb556dd99144f76b700ffdf193122da113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f778b8123f9b0ac26a603ea7b8db1bb556dd99144f76b700ffdf193122da113->enter($__internal_7f778b8123f9b0ac26a603ea7b8db1bb556dd99144f76b700ffdf193122da113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_180d287a42bea908808d446cd90de3f59db525657f0fb775177412f93c97bd84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180d287a42bea908808d446cd90de3f59db525657f0fb775177412f93c97bd84->enter($__internal_180d287a42bea908808d446cd90de3f59db525657f0fb775177412f93c97bd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_7f778b8123f9b0ac26a603ea7b8db1bb556dd99144f76b700ffdf193122da113->leave($__internal_7f778b8123f9b0ac26a603ea7b8db1bb556dd99144f76b700ffdf193122da113_prof);

        
        $__internal_180d287a42bea908808d446cd90de3f59db525657f0fb775177412f93c97bd84->leave($__internal_180d287a42bea908808d446cd90de3f59db525657f0fb775177412f93c97bd84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
