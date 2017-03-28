<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_537469691a419581e155e825d2a852c7552f2c2533fb89732035ae6b9b3861f3 extends Twig_Template
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
        $__internal_2fcdd85ec4870332aa1d9ad8377ddd8d5f7b6ef4c5f2fb1545fef3c563984db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fcdd85ec4870332aa1d9ad8377ddd8d5f7b6ef4c5f2fb1545fef3c563984db2->enter($__internal_2fcdd85ec4870332aa1d9ad8377ddd8d5f7b6ef4c5f2fb1545fef3c563984db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_a779b32d359595a7f895869476a8ce5e708a14915f8dcadd1477f83dcbca1fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a779b32d359595a7f895869476a8ce5e708a14915f8dcadd1477f83dcbca1fde->enter($__internal_a779b32d359595a7f895869476a8ce5e708a14915f8dcadd1477f83dcbca1fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2fcdd85ec4870332aa1d9ad8377ddd8d5f7b6ef4c5f2fb1545fef3c563984db2->leave($__internal_2fcdd85ec4870332aa1d9ad8377ddd8d5f7b6ef4c5f2fb1545fef3c563984db2_prof);

        
        $__internal_a779b32d359595a7f895869476a8ce5e708a14915f8dcadd1477f83dcbca1fde->leave($__internal_a779b32d359595a7f895869476a8ce5e708a14915f8dcadd1477f83dcbca1fde_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
