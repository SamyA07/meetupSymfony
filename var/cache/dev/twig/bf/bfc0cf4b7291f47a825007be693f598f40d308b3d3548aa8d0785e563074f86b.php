<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bc83685e045a336ea97f2c09ad8699ad415350f223a691e05768eaf26ff272e0 extends Twig_Template
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
        $__internal_023bfd30fbefaa77f10ce373918a6f26dc217bb8e5294e708ade933b64489b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023bfd30fbefaa77f10ce373918a6f26dc217bb8e5294e708ade933b64489b39->enter($__internal_023bfd30fbefaa77f10ce373918a6f26dc217bb8e5294e708ade933b64489b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_6fe9dba0d96e7945bafe4d680a38cd2342c53e139e3e4fbc841dc92e44c72de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe9dba0d96e7945bafe4d680a38cd2342c53e139e3e4fbc841dc92e44c72de2->enter($__internal_6fe9dba0d96e7945bafe4d680a38cd2342c53e139e3e4fbc841dc92e44c72de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_023bfd30fbefaa77f10ce373918a6f26dc217bb8e5294e708ade933b64489b39->leave($__internal_023bfd30fbefaa77f10ce373918a6f26dc217bb8e5294e708ade933b64489b39_prof);

        
        $__internal_6fe9dba0d96e7945bafe4d680a38cd2342c53e139e3e4fbc841dc92e44c72de2->leave($__internal_6fe9dba0d96e7945bafe4d680a38cd2342c53e139e3e4fbc841dc92e44c72de2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
