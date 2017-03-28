<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6552dfd4b786628aab194f7e325d29938757f72bb0e692b8229f2b30c2eff144 extends Twig_Template
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
        $__internal_0f90d8fb90defceca12e13086a8605bec9d6a10acf200f15bbfefa4cdc4f3c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f90d8fb90defceca12e13086a8605bec9d6a10acf200f15bbfefa4cdc4f3c13->enter($__internal_0f90d8fb90defceca12e13086a8605bec9d6a10acf200f15bbfefa4cdc4f3c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d7339c88cfec0d905ba79b05d7cbb4edf554afca0754d7a6d7ca39223c041d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7339c88cfec0d905ba79b05d7cbb4edf554afca0754d7a6d7ca39223c041d97->enter($__internal_d7339c88cfec0d905ba79b05d7cbb4edf554afca0754d7a6d7ca39223c041d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_0f90d8fb90defceca12e13086a8605bec9d6a10acf200f15bbfefa4cdc4f3c13->leave($__internal_0f90d8fb90defceca12e13086a8605bec9d6a10acf200f15bbfefa4cdc4f3c13_prof);

        
        $__internal_d7339c88cfec0d905ba79b05d7cbb4edf554afca0754d7a6d7ca39223c041d97->leave($__internal_d7339c88cfec0d905ba79b05d7cbb4edf554afca0754d7a6d7ca39223c041d97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
