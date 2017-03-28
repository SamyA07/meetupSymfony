<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1df70bc64be72dc9ac56e37d71f735001d2ecfd4645331bbc7529e0770dcd60c extends Twig_Template
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
        $__internal_8e8cd3612685a1b64ebc82d3217f77a4ee6b0e4d849bd0064e2074f97d1d2856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8cd3612685a1b64ebc82d3217f77a4ee6b0e4d849bd0064e2074f97d1d2856->enter($__internal_8e8cd3612685a1b64ebc82d3217f77a4ee6b0e4d849bd0064e2074f97d1d2856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_72d09acca4897e7a3e4a418b1ab78e379df1bb77bd9822085530ec42934ccb63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d09acca4897e7a3e4a418b1ab78e379df1bb77bd9822085530ec42934ccb63->enter($__internal_72d09acca4897e7a3e4a418b1ab78e379df1bb77bd9822085530ec42934ccb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_8e8cd3612685a1b64ebc82d3217f77a4ee6b0e4d849bd0064e2074f97d1d2856->leave($__internal_8e8cd3612685a1b64ebc82d3217f77a4ee6b0e4d849bd0064e2074f97d1d2856_prof);

        
        $__internal_72d09acca4897e7a3e4a418b1ab78e379df1bb77bd9822085530ec42934ccb63->leave($__internal_72d09acca4897e7a3e4a418b1ab78e379df1bb77bd9822085530ec42934ccb63_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
