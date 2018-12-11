<?php

/* listeArticlesView.php */
class __TwigTemplate_007a502d72402c269555c5ce2a9291977ee9b467d8e6c1ec674c7eae68278a8a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');


 ?>

 <?php include(\"../Templates/header.php\"); ?>
  <?php include(\"../Templates/nav.php\"); ?>
 <?php include(\"../Templates/carousel.php\"); ?>
 <?php include(\"../Templates/presentation.php\"); ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title></title>
  </head>
  <body>

  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 24
            echo "      <div class=\"row Article\">
        <div class=\"col-md-12 text-center\">
          <h1>";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", array())), "html", null, true);
            echo "</h1>
        </div>
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y", "Europe/Paris"), "html", null, true);
        echo "
      <div class=\"row \">
        <div class=\"col-md-12 text-center article\">
          <img src=\"../assets/images/<?=\$article['images']?>\" class=\"img-fluid\" alt=\"Responsive image\" />
          <p><?php echo substr(\$article['texte'],0, 200); ?>[...]
            <a href=\"detailController.php?id=<?=\$article['id']?>\">lire la suite</a></p>
          <p class=\"date\"><?php echo \$article['date_dujour']; ?></p>

      </div>
    </div>
<?php } ?>
  </body>
</html>

 <?php include(\"../Templates/footer.php\"); ?>
";
    }

    public function getTemplateName()
    {
        return "listeArticlesView.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 30,  55 => 26,  51 => 24,  47 => 23,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "listeArticlesView.php", "/opt/lampp/htdocs/blogVoyage_MVC/views/listeArticlesView.php");
    }
}
