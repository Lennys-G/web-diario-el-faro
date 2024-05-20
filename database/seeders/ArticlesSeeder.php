<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert(
            [
                [
                    'title' => 'Aquí puedes seguir en directo el halving de Bitcoin',
                    'url' => 'https://news.google.com/rss/articles/CBMiS2h0dHBzOi8vZXMuY29pbnRlbGVncmFwaC5jb20vbmV3cy9iaXRjb2luLWhhbHZpbmctbGl2ZXN0cmVhbS13aGVyZS10by13YXRjaNIBAA?oc=5',
                    'urlToImage' => 'https://images.cointelegraph.com/cdn-cgi/image/format=auto,onerror=redirect,quality=90,width=717/https://s3.cointelegraph.com/uploads/2024-04/cd7bfce4-d1b4-47b1-acf3-a99e15de37c0.jpg',
                    'content' => null,
                    'category' => 'negocios'
                ],
                [
                    'title' => '¿Cómo identificar una estafa piramidal?',
                    'url' => 'https://news.google.com/rss/articles/CBMiS2h0dHBzOi8vd3d3LmxhcGF0aWxsYS5jb20vMjAyNC8wNC8xOS9jb21vLWlkZW50aWZpY2FyLXVuYS1lc3RhZmEtcGlyYW1pZGFsL9IBT2h0dHBzOi8vd3d3LmxhcGF0aWxsYS5jb20vMjAyNC8wNC8xOS9jb21vLWlkZW50aWZpY2FyLXVuYS1lc3RhZmEtcGlyYW1pZGFsL2FtcC8?oc=5',
                    'urlToImage' => 'https://images.cointelegraph.com/cdn-cgi/image/format=auto,onerror=redirect,quality=90,width=717/https://s3.cointelegraph.com/uploads/2024-04/cd7bfce4-d1b4-47b1-acf3-a99e15de37c0.jpg',
                    'content' => null,
                    'category' => 'negocios'
                ],
                [
                    'title' => 'Tesla retira del mercado casi 4 mil unidades de su nueva Cybertruck por insólito problema de fábrica',
                    'url' => 'https://news.google.com/rss/articles/CBMiigFodHRwczovL3d3dy5sYXBhdGlsbGEuY29tLzIwMjQvMDQvMTkvdGVzbGEtcmV0aXJhLWRlbC1tZXJjYWRvLWNhc2ktNC1taWwtdW5pZGFkZXMtZGUtc3UtbnVldmEtY3liZXJ0cnVjay1wb3ItaW5zb2xpdG8tcHJvYmxlbWEtZGUtZmFicmljYS_SAY4BaHR0cHM6Ly93d3cubGFwYXRpbGxhLmNvbS8yMDI0LzA0LzE5L3Rlc2xhLXJldGlyYS1kZWwtbWVyY2Fkby1jYXNpLTQtbWlsLXVuaWRhZGVzLWRlLXN1LW51ZXZhLWN5YmVydHJ1Y2stcG9yLWluc29saXRvLXByb2JsZW1hLWRlLWZhYnJpY2EvYW1wLw?oc=5',
                    'urlToImage' => 'https://www.lapatilla.com/wp-content/uploads/2024/04/AFP__20240419__34PT3AC__v1__HighRes__FilesUsRecallAutomobileEnvironmentTesla.jpg?resize=640%2C427?w=768',
                    'content' => null,
                    'category' => 'negocios'
                ],
                [
                    'title' => 'Contrabando de bebidas gaseosas desde Colombia afecta el consumo de las fabricadas en Venezuela',
                    'url' => 'https://news.google.com/rss/articles/CBMihQFodHRwczovL3d3dy5sYXBhdGlsbGEuY29tLzIwMjQvMDQvMTkvY29udHJhYmFuZG8tZGUtYmViaWRhcy1nYXNlb3Nhcy1kZXNkZS1jb2xvbWJpYS1hZmVjdGEtZWwtY29uc3Vtby1kZS1sYXMtZmFicmljYWRhcy1lbi12ZW5lenVlbGEv0gGJAWh0dHBzOi8vd3d3LmxhcGF0aWxsYS5jb20vMjAyNC8wNC8xOS9jb250cmFiYW5kby1kZS1iZWJpZGFzLWdhc2Vvc2FzLWRlc2RlLWNvbG9tYmlhLWFmZWN0YS1lbC1jb25zdW1vLWRlLWxhcy1mYWJyaWNhZGFzLWVuLXZlbmV6dWVsYS9hbXAv?oc=5',
                    'urlToImage' => 'https://www.lapatilla.com/wp-content/uploads/2024/04/Imagen-de-WhatsApp-2024-04-19-a-las-11.55.09_fa80725d.jpg?resize=640%2C479?w=768',
                    'content' => null,
                    'category' => 'negocios'
                ],
                [
                    'title' => 'Los precios del petróleo suben por la escalada de tensión en Medio Oriente',
                    'url' => 'https://news.google.com/rss/articles/CBMiY2h0dHBzOi8vY25uZXNwYW5vbC5jbm4uY29tLzIwMjQvMDQvMTkvcHJlY2lvcy1wZXRyb2xlby1zdWJlbi1lc2NhbGFkYS1jb25mbGljdG8tbWVkaW8tb3JpZW50ZS10cmF4L9IBZ2h0dHBzOi8vY25uZXNwYW5vbC5jbm4uY29tLzIwMjQvMDQvMTkvcHJlY2lvcy1wZXRyb2xlby1zdWJlbi1lc2NhbGFkYS1jb25mbGljdG8tbWVkaW8tb3JpZW50ZS10cmF4L2FtcC8?oc=5',
                    'urlToImage' => 'https://cnnespanol.cnn.com/wp-content/uploads/2024/04/ataque-iran-israel-.jpeg?quality=100&strip=info&w=780&h=438&crop=1',
                    'content' => null,
                    'category' => 'negocios'
                ],
                [
                    'title' => 'Adamari López revela que pensó en vender su casa tras ser despedida de "Hoy día"',
                    'url' => 'https://news.google.com/rss/articles/CBMifGh0dHBzOi8vd3d3LnR2bm90YXMuY29tLm14L2VzcGVjdGFjdWxvcy1tZXhpY28vYWRhbWFyaS1sb3Blei1yZXZlbGEtcXVlLXBlc28tZW4tdmVuZGVyLXN1LWNhc2EtdHJhcy1zZXItZGVzcGVkaWRhLWRlLWhveS1kaWHSAYYBaHR0cHM6Ly93d3cudHZub3Rhcy5jb20ubXgvZXNwZWN0YWN1bG9zLW1leGljby9hZGFtYXJpLWxvcGV6LXJldmVsYS1xdWUtcGVzby1lbi12ZW5kZXItc3UtY2FzYS10cmFzLXNlci1kZXNwZWRpZGEtZGUtaG95LWRpYT9fYW1wPXRydWU?oc=5',
                    'urlToImage' => 'https://assets.tvnotas.com.mx/dims4/default/1443776/2147483647/strip/true/crop/2880x1807+0+0/resize/1440x904!/format/webp/quality/90/?url=https%3A%2F%2Fk3-prod-tvnotas.s3.us-west-2.amazonaws.com%2Fbrightspot%2Fe7%2F1c%2F712baf184ab8ae9fb240f92955d4%2Fportada-tvnotas.jpg',
                    'content' => null,
                    'category' => 'entretenimiento'
                ],
                [
                    'title' => 'Michelle Renaud y Matías Novoa revelan por qué su bebé no nacerá en México',
                    'url' => 'https://news.google.com/rss/articles/CBMieGh0dHBzOi8vd3d3LnF1aWVuLmNvbS9lc3BlY3RhY3Vsb3MvMjAyNC8wNC8xOS9taWNoZWxsZS1yZW5hdWQteS1tYXRpYXMtbm92b2EtcmV2ZWxhbi1wb3ItcXVlLXN1LWJlYmUtbm8tbmFjZXJhLWVuLW1leGljb9IBggFodHRwczovL3d3dy5xdWllbi5jb20vZXNwZWN0YWN1bG9zLzIwMjQvMDQvMTkvbWljaGVsbGUtcmVuYXVkLXktbWF0aWFzLW5vdm9hLXJldmVsYW4tcG9yLXF1ZS1zdS1iZWJlLW5vLW5hY2VyYS1lbi1tZXhpY28_X2FtcD10cnVl?oc=5',
                    'urlToImage' => 'https://cdn-3.expansion.mx/dims4/default/1bcdb60/2147483647/strip/true/crop/1198x799+0+0/resize/1200x800!/format/webp/quality/60/?url=https%3A%2F%2Fcdn-3.expansion.mx%2F33%2Fe1%2Fe7d5760d4c41ba177a2c0f11e10a%2Fmatias-novoa-listo-parto-hijo-milo-michelle-renaud-4.jpg',
                    'content' => null,
                    'category' => 'entretenimiento'
                ],
                [
                    'title' => 'Hija de Madonna grita al mundo las estrictas reglas que su madre la oblig\u00f3 a seguir en la infancia',
                    'url' => 'https://news.google.com/rss/articles/CBMikAFodHRwczovL21lcmlkaWFuby5uZXQvZmFyYW5kdWxhL2hpamEtZGUtbWFkb25uYS1ncml0YS1hbC1tdW5kby1sYXMtZXN0cmljdGFzLXJlZ2xhcy1xdWUtc3UtbWFkcmUtbGEtb2JsaWdvLWEtc2VndWlyLWVuLWxhLWluZmFuY2lhLS0yMDI0NDE5MTI0NjDSAZQBaHR0cHM6Ly9tZXJpZGlhbm8ubmV0L2ZhcmFuZHVsYS9oaWphLWRlLW1hZG9ubmEtZ3JpdGEtYWwtbXVuZG8tbGFzLWVzdHJpY3Rhcy1yZWdsYXMtcXVlLXN1LW1hZHJlLWxhLW9ibGlnby1hLXNlZ3Vpci1lbi1sYS1pbmZhbmNpYS0tMjAyNDQxOTEyNDYwL2FtcA?oc=5',
                    'urlToImage' => 'https://pxcdn.meridiano.net/042024/1713544852871.webp?cw=1155&ch=650&extw=jpg',
                    'content' => null,
                    'category' => 'entretenimiento'
                ],
                [
                    'title' => 'Paris Hilton presume sus primeras fotos con su hija',
                    'url' => 'https://news.google.com/rss/articles/CBMicGh0dHBzOi8vd3d3LmluZm9ybWFkb3IubXgvZW50cmV0ZW5pbWllbnRvL1BhcmlzLUhpbHRvbi1wcmVzdW1lLXN1cy1wcmltZXJhcy1mb3Rvcy1jb24tc3UtaGlqYS0yMDI0MDQxOS0wMTE5Lmh0bWzSAXRodHRwczovL3d3dy5pbmZvcm1hZG9yLm14L2FtcC9lbnRyZXRlbmltaWVudG8vUGFyaXMtSGlsdG9uLXByZXN1bWUtc3VzLXByaW1lcmFzLWZvdG9zLWNvbi1zdS1oaWphLTIwMjQwNDE5LTAxMTkuaHRtbA?oc=5',
                    'urlToImage' => 'https://www.informador.mx/__export/1713557851172/sites/elinformador/img/2024/04/19/rs28540_3309589-age-2020-01-07-20-21-050_crop1713557850136.jpg_1970638775.jpg',
                    'content' => null,
                    'category' => 'entretenimiento'
                ],
                [
                    'title' => '\u00bfWingardium leviosa? La confesi\u00f3n de Emma Watson sobre su pr\u00e1ctica sexual favorita que sorprendi\u00f3 a sus seguidores',
                    'url' => 'https://news.google.com/rss/articles/CBMilgFodHRwczovL3d3dy5sYXBhdGlsbGEuY29tLzIwMjQvMDQvMTkvd2luZ2FyZGl1bS1sZXZpb3NhLWxhLWNvbmZlc2lvbi1kZS1lbW1hLXdhdHNvbi1zb2JyZS1zdS1wcmFjdGljYS1zZXh1YWwtZmF2b3JpdGEtcXVlLXNvcnByZW5kaW8tYS1zdXMtc2VndWlkb3Jlcy_SAZoBaHR0cHM6Ly93d3cubGFwYXRpbGxhLmNvbS8yMDI0LzA0LzE5L3dpbmdhcmRpdW0tbGV2aW9zYS1sYS1jb25mZXNpb24tZGUtZW1tYS13YXRzb24tc29icmUtc3UtcHJhY3RpY2Etc2V4dWFsLWZhdm9yaXRhLXF1ZS1zb3JwcmVuZGlvLWEtc3VzLXNlZ3VpZG9yZXMvYW1wLw?oc=5',
                    'urlToImage' => 'https://www.lapatilla.com/wp-content/uploads/2024/04/Emma-Watson.jpg?resize=640%2C358?w=768',
                    'content' => null,
                    'category' => 'entretenimiento'
                ],
                [
                    'title' => 'Machado, Rosales y la PUD en reuni\u00f3n para definir la candidatura unitaria - El Nacional',
                    'url' => 'https://news.google.com/rss/articles/CBMibmh0dHBzOi8vd3d3LmVsbmFjaW9uYWwuY29tL3ZlbmV6dWVsYS9tYWNoYWRvLXJvc2FsZXMteS1sYS1wdWQtZW4tcmV1bmlvbi1wYXJhLWRlZmluaXItbGEtY2FuZGlkYXR1cmEtdW5pdGFyaWEv0gEA?oc=5',
                    'urlToImage' => 'https://cdn.bitlysdowssl-aws.com/wp-content/uploads/2024/04/manuel-rosales-maria-corina-machado--696x464.jpg',
                    'content' => null,
                    'category' => 'actual'
                ],
                [
                    'title' => 'Meta acelera en el dominio de la inteligencia artificial generativa - Diario Las Americas',
                    'url' => 'https://news.google.com/rss/articles/CBMicWh0dHBzOi8vd3d3LmRpYXJpb2xhc2FtZXJpY2FzLmNvbS9lY29ub21pYS9tZXRhLWFjZWxlcmEtZWwtZG9taW5pby1sYS1pbnRlbGlnZW5jaWEtYXJ0aWZpY2lhbC1nZW5lcmF0aXZhLW41MzU1Mjgw0gF1aHR0cHM6Ly93d3cuZGlhcmlvbGFzYW1lcmljYXMuY29tL2Vjb25vbWlhL21ldGEtYWNlbGVyYS1lbC1kb21pbmlvLWxhLWludGVsaWdlbmNpYS1hcnRpZmljaWFsLWdlbmVyYXRpdmEtbjUzNTUyODAvYW1w?oc=5',
                    'urlToImage' => 'https://media.diariolasamericas.com/p/ba90b545940d6436fdb1329e52a1406f/adjuntos/216/imagenes/100/126/0100126857/855x0/smart/facebook-meta-ap-tony-avelarjpg-2024.jpg',
                    'content' => null,
                    'category' => 'actual'
                ],
                [
                    'title' => 'Preocupaci\u00f3n ante cifras de la epidemia de dengue que azota a Brasil - Enlace - FRANCE 24 Espa\u00f1ol',
                    'url' => 'https://news.google.com/rss/articles/CBMif2h0dHBzOi8vd3d3LmZyYW5jZTI0LmNvbS9lcy9wcm9ncmFtYXMvZW5sYWNlLzIwMjQwNDE5LXByZW9jdXBhY2klQzMlQjNuLWFudGUtY2lmcmFzLWRlLWxhLWVwaWRlbWlhLWRlLWRlbmd1ZS1xdWUtYXpvdGEtYS1icmFzaWzSAQA?oc=5',
                    'urlToImage' => 'https://s.france24.com/media/display/bf46de46-fe5e-11ee-8f8a-005056bf30b7/w =>980/p =>16x9/capture-1479719648662283c01cafd1.60918383%20%281%29.webp',
                    'content' => null,
                    'category' => 'actual'
                ],
                [
                    'title' => 'Estos son los memes m\u00e1s divertidos del WhatsApp verde, la nueva actualizaci\u00f3n del sistema - El Tiempo',
                    'url' => 'https://news.google.com/rss/articles/CBMihwFodHRwczovL3d3dy5lbHRpZW1wby5jb20vY3VsdHVyYS9nZW50ZS9lc3Rvcy1zb24tbG9zLW1lbWVzLW1hcy1kaXZlcnRpZG9zLWRlbC13aGF0c2FwcC12ZXJkZS1sYS1udWV2YS1hY3R1YWxpemFjaW9uLWRlbC1zaXN0ZW1hLTMzMzU2MzfSAYsBaHR0cHM6Ly93d3cuZWx0aWVtcG8uY29tL2FtcC9jdWx0dXJhL2dlbnRlL2VzdG9zLXNvbi1sb3MtbWVtZXMtbWFzLWRpdmVydGlkb3MtZGVsLXdoYXRzYXBwLXZlcmRlLWxhLW51ZXZhLWFjdHVhbGl6YWNpb24tZGVsLXNpc3RlbWEtMzMzNTYzNw?oc=5',
                    'urlToImage' => 'https://imagenes.eltiempo.com/files/image_1200_600/uploads/2024/04/19/6622df772c827.png',
                    'content' => null,
                    'category' => 'actual'
                ],
                [
                    'title' => 'Sala Itinerante \u201cDra. Anamar\u00eda Font\u201d inspira a estudiantes del estado Lara - MINCYT',
                    'url' => 'https://news.google.com/rss/articles/CBMiWGh0dHBzOi8vbWluY3l0LmdvYi52ZS9zYWxhLWl0aW5lcmFudGUtZHJhLWFuYW1hcmlhLWZvbnQtaW5zcGlyYS1lc3R1ZGlhbnRlcy1lc3RhZG8tbGFyYS_SAQA?oc=5',
                    'urlToImage' => 'https://mincyt.gob.ve/wp-content/uploads/2024/04/Snapinsta.app_438966300_835919531912171_8999543720442279965_n_1080.jpg',
                    'content' => null,
                    'category' => 'actual'
                ],
                [
                    'title' => 'Expertos advierten el IMPACTO NEGATIVO que podr\u00eda tener el CAMBIO CLIM\u00c1TICO en la salud MENTAL y el BIENESTAR - El Cronista',
                    'url' => 'https://news.google.com/rss/articles/CBMisgFodHRwczovL3d3dy5jcm9uaXN0YS5jb20vaW5mb3JtYWNpb24tZ3JhbC9leHBlcnRvcy1hZHZpZXJ0ZW4tZWwtaW1wYWN0by1uZWdhdGl2by1xdWUtcG9kcmlhLXRlbmVyLWVsLWNhbWJpby1jbGltYXRpY28tZW4tbGEtc2FsdWQtbWVudGFsLXktZWwtYmllbmVzdGFyLWVtb2Npb25hbC1lbi1sYXMtcGVyc29uYXMv0gGyAWh0dHBzOi8vd3d3LmNyb25pc3RhLmNvbS9pbmZvcm1hY2lvbi1ncmFsL2V4cGVydG9zLWFkdmllcnRlbi1lbC1pbXBhY3RvLW5lZ2F0aXZvLXF1ZS1wb2RyaWEtdGVuZXItZWwtY2FtYmlvLWNsaW1hdGljby1lbi1sYS1zYWx1ZC1tZW50YWwteS1lbC1iaWVuZXN0YXItZW1vY2lvbmFsLWVuLWxhcy1wZXJzb25hcy8?oc=5',
                    'urlToImage' => 'https://img.cronista.com/files/image/657/657941/64d10a0b0eb16_950_534!.webp?s=f5b4c73fa2ba7f46cfcd1792e116ae1e&d=1713572190&oe=jpg',
                    'content' => null,
                    'category' => 'salud'
                ],
                [
                    'title' => 'Cuidando el Bienestar => La importancia de la salud Mental y Emocional en la vida moderna - Meridiano',
                    'url' => 'https://news.google.com/rss/articles/CBMiowFodHRwczovL21lcmlkaWFuby5uZXQvYWdlbmRhLWFsLWFpcmUtbGlicmUvYWdlbmRhLWFsLWFpcmUtbGlicmUvY3VpZGFuZG8tZWwtYmllbmVzdGFyLWxhLWltcG9ydGFuY2lhLWRlLWxhLXNhbHVkLW1lbnRhbC15LWVtb2Npb25hbC1lbi1sYS12aWRhLW1vZGVybmEtMjAyNDQxOTE4MzQw0gEA?oc=5',
                    'urlToImage' => 'https://pxcdn.meridiano.net/042024/1713566555001.webp?cw=1155&ch=650&extw=jpg',
                    'content' => null,
                    'category' => 'salud'
                ],
                [
                    'title' => 'DIPUTADOS ESCUCHAN A ESTUDIANTES DE MEDICINA - Congreso de la Rep\u00fablica de Guatemala',
                    'url' => 'https://news.google.com/rss/articles/CBMiOmh0dHBzOi8vd3d3LmNvbmdyZXNvLmdvYi5ndC9ub3RpY2lhc19jb25ncmVzby8xMTE1MC8yMDI0LzHSAQA?oc=5',
                    'urlToImage' => 'https://www.congreso.gob.gt/assets/uploads/noticias/miniaturas/7f72b-6740f0a9-dc70-43de-95ce-3382a0ccff74.jpg',
                    'content' => null,
                    'category' => 'salud'
                ],
                [
                    'title' => '\u00bfTrabajas en el Tec? Tienes estas opciones para cuidar tu salud mental - Tecnol\u00f3gico de Monterrey',
                    'url' => 'https://news.google.com/rss/articles/CBMifGh0dHBzOi8vY29uZWN0YS50ZWMubXgvZXMvbm90aWNpYXMvbmFjaW9uYWwvaW5zdGl0dWNpb24vdHJhYmFqYXMtZW4tZWwtdGVjLXRpZW5lcy1lc3Rhcy1vcGNpb25lcy1wYXJhLWN1aWRhci10dS1zYWx1ZC1tZW50YWzSAQA?oc=5',
                    'urlToImage' => 'https://conecta.tec.mx/sites/default/files/styles/header_full/public/2024-03/bienestar-emocional-colaboradores-tec.jpg.webp?itok=cKdvIo9x',
                    'content' => null,
                    'category' => 'salud'
                ],
                [
                    'title' => 'Evento sobre salud mental y bienestar emocional en Raleigh - Qu\u00e9 Pasa',
                    'url' => 'https://news.google.com/rss/articles/CBMibGh0dHBzOi8vcXVlcGFzYW1lZGlhLmNvbS9ub3RpY2lhcy9yYWxlaWdoLWR1cmhhbS9ldmVudG8tc29icmUtc2FsdWQtbWVudGFsLXktYmllbmVzdGFyLWVtb2Npb25hbC1lbi1yYWxlaWdoL9IBAA?oc=5',
                    'urlToImage' => 'https://qpwebsite.s3.amazonaws.com/uploads/2024/04/mujer-yoga.png',
                    'content' => null,
                    'category' => 'salud'
                ],
                [
                    'title' => 'As\u00ed consigui\u00f3 la luna Mimas tener su propio oc\u00e9ano subterr\u00e1neo - ABC.es',
                    'url' => 'https://news.google.com/rss/articles/CBMiZmh0dHBzOi8vd3d3LmFiYy5lcy9jaWVuY2lhL2NvbnNpZ3Vpby1sdW5hLW1pbWFzLXRlbmVyLXByb3Bpby1vY2Vhbm8tc3VidGVycmFuZW8tMjAyNDA0MTgwNzAwMDAtbnQuaHRtbNIBamh0dHBzOi8vd3d3LmFiYy5lcy9jaWVuY2lhL2NvbnNpZ3Vpby1sdW5hLW1pbWFzLXRlbmVyLXByb3Bpby1vY2Vhbm8tc3VidGVycmFuZW8tMjAyNDA0MTgwNzAwMDAtbnRfYW1wLmh0bWw?oc=5',
                    'urlToImage' => 'https://s2.abcstatics.com/abc/www/multimedia/ciencia/2024/04/18/Mimas-R7WDlO9nBkAppWlukF8nbNM-1200x840@diario_abc.jpg',
                    'content' => null,
                    'category' => 'ciencia'
                ],
                [
                    'title' => 'Descubren un exoplaneta del tama\u00f1o de J\u00fapiter con caracter\u00edsticas \u00fanicas - infobae',
                    'url' => 'https://news.google.com/rss/articles/CBMihAFodHRwczovL3d3dy5pbmZvYmFlLmNvbS9hbWVyaWNhL2NpZW5jaWEtYW1lcmljYS8yMDI0LzA0LzE5L2Rlc2N1YnJlbi11bi1leG9wbGFuZXRhLWRlbC10YW1hbm8tZGUtanVwaXRlci1jb24tY2FyYWN0ZXJpc3RpY2FzLXVuaWNhcy_SAZgBaHR0cHM6Ly93d3cuaW5mb2JhZS5jb20vYW1lcmljYS9jaWVuY2lhLWFtZXJpY2EvMjAyNC8wNC8xOS9kZXNjdWJyZW4tdW4tZXhvcGxhbmV0YS1kZWwtdGFtYW5vLWRlLWp1cGl0ZXItY29uLWNhcmFjdGVyaXN0aWNhcy11bmljYXMvP291dHB1dFR5cGU9YW1wLXR5cGU?oc=5',
                    'urlToImage' => 'https://www.infobae.com/new-resizer/SYc79qYpTF3UU04VWpdQ7x9csds=/992x606/filters =>format(webp) =>quality(85)/cloudfront-us-east-1.images.arcpublishing.com/infobae/LDW6Y5KCY5AQ7HEEW36QLP2YPU.jpg',
                    'content' => null,
                    'category' => 'ciencia'
                ],
                [
                    'title' => 'Hora exacta y d\u00f3nde ver Cometa Diablo en vivo desde Espa\u00f1a este 21 de abril v\u00eda NASA TV - Diario Gesti\u00f3n',
                    'url' => 'https://news.google.com/rss/articles/CBMipwFodHRwczovL2dlc3Rpb24ucGUvbWl4L3Jlc3B1ZXN0YXMvaG9yYS1leGFjdGEteS1kb25kZS12ZXItY29tZXRhLWRpYWJsby1lbi12aXZvLWRlc2RlLWVzcGFuYS1lc3RlLTIxLWRlLWFicmlsLXZpYS1uYXNhLXR2LWRldmlsLWNvbWV0LTEycHBvbnMtYnJvb2tzLW5uZGEtbm5ydC1ub3RpY2lhL9IBtgFodHRwczovL2dlc3Rpb24ucGUvbWl4L3Jlc3B1ZXN0YXMvaG9yYS1leGFjdGEteS1kb25kZS12ZXItY29tZXRhLWRpYWJsby1lbi12aXZvLWRlc2RlLWVzcGFuYS1lc3RlLTIxLWRlLWFicmlsLXZpYS1uYXNhLXR2LWRldmlsLWNvbWV0LTEycHBvbnMtYnJvb2tzLW5uZGEtbm5ydC1ub3RpY2lhLz9vdXRwdXRUeXBlPWFtcA?oc=5',
                    'urlToImage' => 'https://gestion.pe/resizer/M2UwTT-cEE0pQFWDYXC5pOuVf4I=/580x330/smart/filters =>format(jpeg) =>quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/WYDHVZLR7FAZZGZ7FIE3QTH26Y.jpg',
                    'content' => null,
                    'category' => 'ciencia'
                ],
                [
                    'title' => 'El cambio clim\u00e1tico podr\u00eda generar m\u00e1s pobreza global, seg\u00fan un estudio - infobae',
                    'url' => 'https://news.google.com/rss/articles/CBMieWh0dHBzOi8vd3d3LmluZm9iYWUuY29tL2VzdGFkb3MtdW5pZG9zLzIwMjQvMDQvMTkvZWwtY2FtYmlvLWNsaW1hdGljby1wb2RyaWEtZ2VuZXJhci1tYXMtcG9icmV6YS1nbG9iYWwtc2VndW4tdW4tZXN0dWRpby_SAY0BaHR0cHM6Ly93d3cuaW5mb2JhZS5jb20vZXN0YWRvcy11bmlkb3MvMjAyNC8wNC8xOS9lbC1jYW1iaW8tY2xpbWF0aWNvLXBvZHJpYS1nZW5lcmFyLW1hcy1wb2JyZXphLWdsb2JhbC1zZWd1bi11bi1lc3R1ZGlvLz9vdXRwdXRUeXBlPWFtcC10eXBl?oc=5',
                    'urlToImage' => 'https://www.infobae.com/new-resizer/2wNTTPAZovRKACDIaQdUO0UCynA=/992x606/filters =>format(webp) =>quality(85)/cloudfront-us-east-1.images.arcpublishing.com/infobae/7RFFE7AAYVDSBJSUP2G4H4DP7Y.jpg',
                    'content' => null,
                    'category' => 'ciencia'
                ],
                [
                    'title' => 'Desarrollan una forma de estimular las c\u00e9lulas inmunitarias para combatir el c\u00e1ncer - La Raz\u00f3n',
                    'url' => 'https://news.google.com/rss/articles/CBMieWh0dHBzOi8vd3d3LmxhcmF6b24uZXMvY2llbmNpYS9mb3JtYS1lc3RpbXVsYXItY2VsdWxhcy1pbm11bml0YXJpYXMtY29tYmF0aXItY2FuY2VyXzIwMjQwNDE5NjYyMmJjZjBjMGI5NWMwMDAxMDZlMTNkLmh0bWzSAYgBaHR0cHM6Ly93d3cubGFyYXpvbi5lcy9jaWVuY2lhL2Zvcm1hLWVzdGltdWxhci1jZWx1bGFzLWlubXVuaXRhcmlhcy1jb21iYXRpci1jYW5jZXJfMjAyNDA0MTk2NjIyYmNmMGMwYjk1YzAwMDEwNmUxM2QuaHRtbD9vdXRwdXRUeXBlPWFtcA?oc=5',
                    'urlToImage' => 'https://fotografias.larazon.es/clipping/cmsimages01/2024/04/19/FA336550-77C4-43E7-9A31-22EEDE16C6F8/ilustracion-citoquinas-clave-que-sistema-inmune-enfrente-cancer_98.jpg?crop=1280,720,x0,y0&width=1900&height=1069&optimize=low&format=webply',
                    'content' => null,
                    'category' => 'ciencia'
                ],
                [
                    'title' => 'MLB => \u00a1Indetenible! Jos\u00e9 Altuve va a ritmo de MVP (+video) - Meridiano',
                    'url' => 'https://news.google.com/rss/articles/CBMidWh0dHBzOi8vbWVyaWRpYW5vLm5ldC9iZWlzYm9sL2JlaXNib2wtZ3JhbmRlcy1saWdhcy9tbGItaW5kZXRlbmlibGUtam9zZS1hbHR1dmUtdmEtYS1yaXRtby1kZS1tdnAtdmlkZW8tLTIwMjQ0MTkxNzE4MNIBAA?oc=5',
                    'urlToImage' => 'https://pxcdn.meridiano.net/042024/1713561562902.webp?cw=1155&ch=650&extw=jpg',
                    'content' => null,
                    'category' => 'deportes'
                ],
                [
                    'title' => 'Houston Astros decidieron con Verlander, cambiaron el roster - Swing Completo LLC',
                    'url' => 'https://news.google.com/rss/articles/CBMiT2h0dHBzOi8vc3dpbmdjb21wbGV0by5jb20vaG91c3Rvbi1hc3Ryb3MtYWN0aXZhcm9uLWp1c3Rpbi12ZXJsYW5kZXItbWxiLTI0MDQxOS_SAQA?oc=5',
                    'urlToImage' => 'https://swingcompleto.com/wp-content/uploads/2024/04/Justin-Verlander-Astros-de-Houston.jpg',
                    'content' => null,
                    'category' => 'deportes'
                ],
                [
                    'title' => 'MLB => \u00a1No le batea a nadie! Jackson Holliday sufre este anti r\u00e9cord tras su flojo inicio con Orioles - Meridiano',
                    'url' => 'https://news.google.com/rss/articles/CBMinwFodHRwczovL21lcmlkaWFuby5uZXQvYmVpc2JvbC9iZWlzYm9sLWdyYW5kZXMtbGlnYXMvbWxiLW5vLWxlLWJhdGVhLWEtbmFkaWUtamFja3Nvbi1ob2xsaWRheS1zdWZyZS1lc3RlLWFudGktcmVjb3JkLXRyYXMtc3UtZmxvam8taW5pY2lvLWNvbi1vcmlvbGVzLTIwMjQ0MTk2OTDSAaMBaHR0cHM6Ly9tZXJpZGlhbm8ubmV0L2JlaXNib2wvYmVpc2JvbC1ncmFuZGVzLWxpZ2FzL21sYi1uby1sZS1iYXRlYS1hLW5hZGllLWphY2tzb24taG9sbGlkYXktc3VmcmUtZXN0ZS1hbnRpLXJlY29yZC10cmFzLXN1LWZsb2pvLWluaWNpby1jb24tb3Jpb2xlcy0yMDI0NDE5NjkwL2FtcA?oc=5',
                    'urlToImage' => 'https://pxcdn.meridiano.net/042024/1713543368128.webp?cw=1155&ch=650&extw=jpg',
                    'content' => null,
                    'category' => 'deportes'
                ],
                [
                    'title' => 'LO SORPRENDI\u00d3 Don Omar => Ronald Acu\u00f1a Jr. VIVI\u00d3 experiencia INOLVIDABLE (+VIDEO) - Swing Completo LLC',
                    'url' => 'https://news.google.com/rss/articles/CBMiY2h0dHBzOi8vc3dpbmdjb21wbGV0by5jb20vZG9uLW9tYXItcm9uYWxkLWFjdW5hLWpyLWNvbmNpZXJ0by1yZWdndWV0b24tYXRsYW50YS1icmF2ZXMtdmlkZW8tMjQwNDE5L9IBAA?oc=5',
                    'urlToImage' => 'https://swingcompleto.com/wp-content/uploads/2024/04/Ronald-Acuna-Jr-Don-Omar-concierto.jpg',
                    'content' => null,
                    'category' => 'deportes'
                ],
                [
                    'title' => '1200 MILLONES => FC Barcelona y Nike cerca de un mega contrato - Swing Completo LLC',
                    'url' => 'https://news.google.com/rss/articles/CBMiU2h0dHBzOi8vc3dpbmdjb21wbGV0by5jb20vMS0yMDAtbWlsbG9uZXMtZmMtYmFyY2Vsb25hLW5lZ29jaWEtY29udHJhdG8tbmlrZS0yNDA0MTkv0gEA?oc=5',
                    'urlToImage' => 'https://swingcompleto.com/wp-content/uploads/2024/04/FC-Barcelona-Nike.jpg',
                    'content' => null,
                    'category' => 'deportes'
                ],
                [
                    'title' => 'REC \u2013 El festival gratuito m\u00e1s grande del Sur de Chile',
                    'url' => 'https://festivalrec.cl/',
                    'urlToImage' => 'https://festivalrec.cl/wp-content/uploads/2024/03/REC_LineUp_16-9_escr-2048x1152.png',
                    'content' => null,
                    'category' => 'anuncios'
                ],
                [
                    'title' => 'Puerta Hipodromo desde UF 2.300 - Inmobiliaria Ingeval',
                    'url' => 'https://www.yapo.cl/inmuebles/comprar/nuevo/61',
                    'urlToImage' => 'https://storage.googleapis.com/yapo-pub-stor-reb-prd/57ac7aef-35ea-4be3-88b3-717230dc6824.webp',
                    'content' => null,
                    'category' => 'anuncios'
                ],
                [
                    'title' => 'Disney On Ice - Vive tus sue\u00f1os del 02 de agosto 2024 - 04 de agosto 2024',
                    'url' => 'https://www.puntoticket.com/disney-on-ice',
                    'urlToImage' => 'https://static.ptocdn.net/images/eventos/rgb011v2_calugalistado.jpg',
                    'content' => null,
                    'category' => 'anuncios'
                ],
                [
                    'title' => 'Auxiliar de chofer 10x10,Iquique',
                    'url' => 'https://www.yapo.cl/empleos-y-servicios/auxiliar-de-chofer-10x10iquique_89461476',
                    'urlToImage' => 'https://img.yapo.cl/images/31/3184367238.jpg',
                    'content' => null,
                    'category' => 'anuncios'
                ]
            ]
        );
    }
}
