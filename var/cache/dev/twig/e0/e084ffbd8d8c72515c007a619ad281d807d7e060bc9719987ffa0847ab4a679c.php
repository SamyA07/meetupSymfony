<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_23bd7b5a32686d02c57ce5008eefc28293dd1dc1c2a1b7319b0807a46ac9af3c extends Twig_Template
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
        $__internal_5a629fc672876a1a7700f29decb22a6590ee6160726e35bbeb188fa7164b1cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a629fc672876a1a7700f29decb22a6590ee6160726e35bbeb188fa7164b1cab->enter($__internal_5a629fc672876a1a7700f29decb22a6590ee6160726e35bbeb188fa7164b1cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_bc6fa95c2c9bdb0c197e3618c25884a74dabda4ff1fa34d1d6dbd1064255acd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6fa95c2c9bdb0c197e3618c25884a74dabda4ff1fa34d1d6dbd1064255acd6->enter($__internal_bc6fa95c2c9bdb0c197e3618c25884a74dabda4ff1fa34d1d6dbd1064255acd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5a629fc672876a1a7700f29decb22a6590ee6160726e35bbeb188fa7164b1cab->leave($__internal_5a629fc672876a1a7700f29decb22a6590ee6160726e35bbeb188fa7164b1cab_prof);

        
        $__internal_bc6fa95c2c9bdb0c197e3618c25884a74dabda4ff1fa34d1d6dbd1064255acd6->leave($__internal_bc6fa95c2c9bdb0c197e3618c25884a74dabda4ff1fa34d1d6dbd1064255acd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
