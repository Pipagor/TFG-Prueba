<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* buscador/mostrar/subclases.html.twig */
class __TwigTemplate_05eca1ceb674dffa5bb6cd8179824b01 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/subclases.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bodygrid.css"), "html", null, true);
        yield "\">
";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "   <div class=\"grid-body\">
      <div class=\"L1\"></div>
      <div class=\"L2\"></div>
      <div class=\"DC\">
            <div class='grid-subclase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subclase"] ?? null), "nombre", [], "any", false, false, false, 12), "html", null, true);
        yield "</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\"><b>Requisitos: </b> <p>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subclase"] ?? null), "Requisitos", [], "any", false, false, false, 14), "html", null, true);
        yield "</p></div>
                <div  class=\"I\" ><img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subclase"] ?? null), "img", [], "any", false, false, false, 15), "html", null, true);
        yield "\"/></div>
            </div>
        </div>
      <div class=\"TP\" >
            <h1>Tabla de Progresión</h1>
            <table class=\"Progreso\">
            <tr>
                <th>Nivel</th>
                <th>Competencia</th>
                <th>Mejoras</th>
                ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "id", [], "any", false, false, false, 25) == 3)) {
            // line 26
            yield "                    <th>Despliegue Artístico</th>
                ";
        }
        // line 28
        yield "            </tr>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabla"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["linea"]) {
            // line 30
            yield "                    <tr>
                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = $context["linea"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
            yield "</td>
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = $context["linea"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "html", null, true);
            yield "</td>
                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = $context["linea"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[2] ?? null) : null), "html", null, true);
            yield "</td>
                        ";
            // line 34
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "id", [], "any", false, false, false, 34) == 3)) {
                // line 35
                yield "                            <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = $context["linea"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[3] ?? null) : null), "html", null, true);
                yield "</td>
                        ";
            }
            // line 37
            yield "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "            </table>
        </div>
      <div class=\"RC\">
            <h1>Rasgos de Subclase</h1>
            <div>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rasgos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["habilidad"]) {
            // line 45
            yield "                    <div class=\"grid-rasgos\">
                        <span class=\"N\"><b>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "nombre", [], "any", false, false, false, 46), "html", null, true);
            yield "</b></span>
                        <span class=\"V1\"></span>
                        <span class=\"L\"><b><i>Nivel ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "OrigenNivel", [], "any", false, false, false, 48), "html", null, true);
            yield "</i></b></span>
                        <span class=\"D\">";
            // line 49
            $context["parraf"] = "";
            // line 50
            yield "                                        ";
            $context["buffer"] = 0;
            // line 51
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 51))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 52
                yield "                                            ";
                if ((($context["buffer"] ?? null) > 0)) {
                    // line 53
                    yield "                                                ";
                    $context["buffer"] = (($context["buffer"] ?? null) - 1);
                    // line 54
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 54), $context["i"], 5) == "{|S|}")) {
                    // line 55
                    yield "                                                ";
                    $context["parraf"] = Twig\Extension\CoreExtension::join([($context["parraf"] ?? null), "
"]);
                    // line 56
                    yield "                                                ";
                    $context["buffer"] = 4;
                    // line 57
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 57), $context["i"], 5) == "{|B|}")) {
                    // line 58
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 59
                    $context["parraf"] = "";
                    // line 60
                    yield "                                                <b>
                                                ";
                    // line 61
                    $context["buffer"] = 4;
                    // line 62
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 62), $context["i"], 5) == "{|I|}")) {
                    // line 63
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 64
                    $context["parraf"] = "";
                    // line 65
                    yield "                                                <i>
                                                ";
                    // line 66
                    $context["buffer"] = 4;
                    // line 67
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 67), $context["i"], 6) == "{|/B|}")) {
                    // line 68
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 69
                    $context["parraf"] = "";
                    // line 70
                    yield "                                                </b>
                                                ";
                    // line 71
                    $context["buffer"] = 5;
                    // line 72
                    yield "                                            ";
                } elseif ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 72), $context["i"], 6) == "{|/I|}")) {
                    // line 73
                    yield "                                                ";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
                    yield "
                                                ";
                    // line 74
                    $context["parraf"] = "";
                    // line 75
                    yield "                                                </i>
                                                ";
                    // line 76
                    $context["buffer"] = 5;
                    // line 77
                    yield "                                            ";
                } else {
                    // line 78
                    yield "                                                ";
                    $context["parraf"] = Twig\Extension\CoreExtension::join([($context["parraf"] ?? null), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 78), $context["i"], 1)]);
                    // line 79
                    yield "                                            ";
                }
                // line 80
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            yield "                                        ";
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parraf"] ?? null), "html", null, true));
            yield "
                        </span> 
                    </div><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "            </div>
        </div>
      <div class=\"SU\">
         <h1>Clase principal</h1>
                <div class=\"listado\">
                  <a class=\"elemento\" href=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_clase", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "id", [], "any", false, false, false, 90)]), "html", null, true);
        yield "\">
                     <img class=\"I\" src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "img", [], "any", false, false, false, 91), "html", null, true);
        yield "\">
                     <h2 class=\"N\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "Nombre", [], "any", false, false, false, 92), "html", null, true);
        yield "</h2>
                     <span class=\"E\"></span>
                     <i class=\"C\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "Competencias", [], "any", false, false, false, 94), "html", null, true);
        yield "</i>
                     <i class=\"A\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "Autor", [], "any", false, false, false, 95), "html", null, true);
        yield "</i>
                     <span class=\"S\"><b>Salvaciones:</b> ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["clase"] ?? null), "Salvaciones", [], "any", false, false, false, 96), "html", null, true);
        yield "</span>
                  </a>
                </div>
      </div>

   </div>
    
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "buscador/mostrar/subclases.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  300 => 96,  296 => 95,  292 => 94,  287 => 92,  283 => 91,  279 => 90,  272 => 85,  261 => 81,  255 => 80,  252 => 79,  249 => 78,  246 => 77,  244 => 76,  241 => 75,  239 => 74,  234 => 73,  231 => 72,  229 => 71,  226 => 70,  224 => 69,  219 => 68,  216 => 67,  214 => 66,  211 => 65,  209 => 64,  204 => 63,  201 => 62,  199 => 61,  196 => 60,  194 => 59,  189 => 58,  186 => 57,  183 => 56,  179 => 55,  176 => 54,  173 => 53,  170 => 52,  165 => 51,  162 => 50,  160 => 49,  156 => 48,  151 => 46,  148 => 45,  144 => 44,  137 => 39,  130 => 37,  124 => 35,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  107 => 30,  103 => 29,  100 => 28,  96 => 26,  94 => 25,  81 => 15,  77 => 14,  72 => 12,  64 => 6,  60 => 5,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "buscador/mostrar/subclases.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\buscador\\mostrar\\subclases.html.twig");
    }
}
