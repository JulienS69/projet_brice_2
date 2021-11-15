<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seeder de l'application pour avoir des données initilisé au lancement de l'application.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'nom' => 'Administrateur',
                'prenom' => 'Brice',
                'tel' => '0658595828',
                'email' => 'b.cavelier@xefi.fr',
                'password' => Hash::make('Xefi.2019'),
                'admin' => true,
            ]
        );
        DB::table('users')->insert(
            [
                'nom' => 'Administrateur_2',
                'prenom' => 'Admin',
                'tel' => '0625659586',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'admin' => true,
            ]
        );
        DB::table('users')->insert(
            [
                'nom' => 'Utilisateur',
                'prenom' => 'Visiteur',
                'tel' => '0658555828',
                'email' => 'visiteur@gmail.com',
                'password' => Hash::make('visiteur'),
            ]
        );

        DB::table('categories')->insert(
            [
                'nom' => 'Jeux-Video',
                'user_id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'nom' => 'Linguistique',
                'user_id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'nom' => 'Philosophie',
                'user_id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'nom' => 'Cartes-graphiques',
                'user_id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'nom' => 'Sports',
                'user_id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'nom' => 'Politique',
                'user_id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'nom' => 'Programmation',
                'user_id' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'nom' => 'Technologies',
                'user_id' => 1,
            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 1',
                'libelle' => 'Vestibulum sit amet gravida est. Cras et tortor vitae orci pellentesque pellentesque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus vitae urna placerat, condimentum ligula eget, dapibus dolor. Mauris eu risus sollicitudin, viverra nisl ac, bibendum urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere Projet_Brice_Laravel; Integer hendrerit neque libero, vitae ultricies felis eleifend hendrerit.
                              Vestibulum sit amet gravida est. Cras et tortor vitae orci pellentesque pellentesque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus vitae urna placerat, condimentum ligula eget, dapibus dolor. Mauris eu risus sollicitudin, viverra nisl ac, bibendum urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer hendrerit neque libero, vitae ultricies felis eleifend hendrerit.
                              Integer porta eros a nisi bibendum fringilla. Curabitur et erat eu tellus porttitor gravida. Phasellus eu purus ultricies, bibendum erat sit amet, semper lorem. In interdum erat vel dolor sagittis, id aliquam velit congue. Aenean in libero leo. In tempus nibh non massa convallis, at luctus metus viverra. Pellentesque pretium nec felis quis facilisis.
                              Morbi at nunc ac erat malesuada ultrices. In a augue mauris. Nulla ipsum enim, gravida nec interdum vitae, consequat vitae ligula. Morbi vel nisl quis tellus mattis pharetra ac sed erat. Curabitur leo mauris, hendrerit eget lectus quis, viverra porta enim. Quisque consectetur mauris ac dolor vestibulum tempus. Maecenas maximus non nunc quis aliquet. Morbi quis eros nec mauris viverra mollis elementum sit amet nunc. Curabitur et diam sed purus sollicitudin tincidunt. Quisque nec scelerisque ante, eu ullamcorper orci. Aliquam congue dignissim leo non mollis. Cras hendrerit hendrerit diam condimentum ultricies. In id sem placerat, dignissim lacus sit amet, cursus felis. Nam enim felis, aliquet et pulvinar vitae, ullamcorper non sem. Sed maximus ligula a velit euismod varius. Sed ut risus ut felis finibus pretium.',
                'user_id' => 1,
            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 2',
                'libelle' => 'Morbi at nunc ac erat malesuada ultrices. In a augue mauris. Nulla ipsum enim, gravida nec interdum vitae, consequat vitae ligula. Morbi vel nisl quis tellus mattis pharetra ac sed erat. Curabitur leo mauris, hendrerit eget lectus quis, viverra porta enim. Quisque consectetur mauris ac dolor vestibulum tempus. Maecenas maximus non nunc quis aliquet. Morbi quis eros nec mauris viverra mollis elementum sit amet nunc. Curabitur et diam sed purus sollicitudin tincidunt. Quisque nec scelerisque ante, eu ullamcorper orci. Aliquam congue dignissim leo non mollis. Cras hendrerit hendrerit diam condimentum ultricies. In id sem placerat, dignissim lacus sit amet, cursus felis. Nam enim felis, aliquet et pulvinar vitae, ullamcorper non sem. Sed maximus ligula a velit euismod varius. Sed ut risus ut felis finibus pretium.
                              Vestibulum sit amet gravida est. Cras et tortor vitae orci pellentesque pellentesque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus vitae urna placerat, condimentum ligula eget, dapibus dolor. Mauris eu risus sollicitudin, viverra nisl ac, bibendum urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer hendrerit neque libero, vitae ultricies felis eleifend hendrerit.
                              Integer porta eros a nisi bibendum fringilla. Curabitur et erat eu tellus porttitor gravida. Phasellus eu purus ultricies, bibendum erat sit amet, semper lorem. In interdum erat vel dolor sagittis, id aliquam velit congue. Aenean in libero leo. In tempus nibh non massa convallis, at luctus metus viverra. Pellentesque pretium nec felis quis facilisis.',
                'user_id' => 1,
            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 3',
                'libelle' => 'Vivamus ultrices non sapien condimentum efficitur. Fusce eu mi felis. Ut non diam ut lorem sollicitudin luctus. Nullam lectus risus, mollis maximus sem eu, consequat lobortis eros. Cras semper faucibus sapien vel faucibus. Nulla mollis eu lectus eu dapibus. Sed finibus quam id semper tristique. Proin in interdum ligula, quis tempus nunc. Nam eu volutpat enim, eu vestibulum risus.
                              Fusce sed libero lacinia, auctor lacus eu, tincidunt nisi. Integer elementum in magna nec commodo. Aenean iaculis massa id fermentum maximus. Quisque pellentesque pellentesque ligula, at pretium urna pellentesque vel. Donec commodo turpis ut enim molestie, vitae fringilla nunc mattis. Praesent eget purus id tortor congue ullamcorper et ut quam. Phasellus et sem ipsum. Phasellus ligula ex, bibendum non lorem et, sollicitudin dictum turpis.',
                'user_id' => 1,
            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 4',
                'libelle' => 'Mauris lectus augue, ornare non hendrerit fringilla, condimentum vel diam. Aliquam et arcu felis. Donec blandit auctor bibendum. Sed eget efficitur nisi. Duis sit amet tellus id mi laoreet scelerisque in tristique elit. Nullam ac pharetra purus, quis sollicitudin justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum vehicula turpis quis urna porttitor, vitae iaculis eros convallis. Sed felis odio, ullamcorper id suscipit eu, semper vel nisl. Aenean rhoncus et dui ut rhoncus. Integer sagittis nunc eget iaculis varius. Nullam et orci bibendum arcu finibus dapibus. Sed sed nunc tempus, ultrices nisl sed, finibus nulla. Suspendisse a nisl ultrices, posuere lacus accumsan, lobortis ante. Morbi mattis ut neque eu suscipit. Proin rhoncus dapibus pulvinar.',
                'user_id' => 1,

            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 5',
                'libelle' => 'Proin viverra lobortis tortor. Aliquam eu neque vitae magna pharetra venenatis. In lobortis laoreet accumsan. Aenean neque metus, ornare sed libero id, tincidunt feugiat elit. Nunc congue malesuada elit in mollis. Donec aliquet leo sit amet rutrum egestas. In eu nunc tempus nibh iaculis maximus nec a eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum rutrum luctus condimentum. Morbi vitae hendrerit quam. Nullam lobortis dapibus laoreet. Praesent luctus volutpat enim, sit amet posuere lectus egestas nec. Ut luctus lectus sit amet dui dictum, facilisis commodo urna convallis.',
                'user_id' => 1,

            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 6',
                'libelle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras efficitur vitae metus vel viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse posuere nec augue nec dignissim. Quisque feugiat sagittis sollicitudin. Duis consectetur id leo a condimentum. Nulla non lorem at velit semper tristique. Ut vitae gravida massa. Quisque pharetra pellentesque purus ut ultricies. Vivamus hendrerit magna sit amet lectus mattis dignissim. Maecenas in ante id elit lobortis viverra id nec elit. Aenean sed semper arcu. Suspendisse facilisis erat ullamcorper aliquet bibendum. Nunc fermentum ipsum id arcu faucibus egestas eu lobortis mauris. Cras congue, dui eu vehicula eleifend, nulla augue scelerisque enim, eget iaculis ante arcu suscipit turpis. Phasellus sit amet erat porttitor, pretium lacus ut, tincidunt velit. Integer dictum eu lacus ac iaculis.',
                'user_id' => 1,

            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 7',
                'libelle' => 'sddsddddd',
                'user_id' => 1,

            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 8',
                'libelle' => 'Praesent id hendrerit elit. Maecenas et massa a nisi suscipit volutpat. Vivamus faucibus finibus accumsan. Integer consectetur urna metus. Nullam at interdum odio, eu aliquam metus. Donec at sem cursus, feugiat orci at, ultricies ante. Fusce quis porta odio. Sed viverra cursus convallis. Aliquam erat volutpat. Aliquam hendrerit pulvinar elit sed mattis. Vivamus congue faucibus augue eu tincidunt.
                              Mauris non eros ullamcorper, vestibulum neque eu, hendrerit lorem. Donec tempus commodo nunc sed malesuada. Nullam a dui ut nulla lobortis porttitor vitae et ligula. Duis vitae sagittis erat. Cras laoreet nulla nisl, ac bibendum ligula euismod vel. Quisque ornare ac neque et dignissim. Proin quis sapien eget mauris vehicula laoreet a non arcu. Vestibulum viverra quam non rutrum sodales. Donec vestibulum sem in accumsan efficitur. Aliquam tincidunt velit sollicitudin dui pulvinar pharetra. Etiam et quam et risus pulvinar porta non quis purus. Aliquam hendrerit gravida pharetra.',
                'user_id' => 1,

            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 9',
                'libelle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mattis libero, at molestie sapien. Morbi nec semper ipsum. Nunc iaculis elementum tristique. Pellentesque quam est, elementum ac dignissim ornare, ornare mollis lacus. Integer pulvinar et ante vel rhoncus. Donec placerat diam est, non consequat neque tempus ut. Donec rhoncus facilisis venenatis. Suspendisse finibus ligula at tortor sodales placerat.
                              Cras tempus nunc nibh, feugiat consectetur augue interdum eget. Pellentesque finibus sapien neque, vel sollicitudin elit commodo eu. Aliquam erat volutpat. Vestibulum aliquet aliquam turpis, ac pellentesque velit ultricies in. Praesent luctus facilisis ullamcorper. Quisque vitae viverra turpis. Nullam non leo leo. Fusce semper lacus at nulla laoreet, id faucibus sapien dictum. Cras ultricies magna ullamcorper nisl mollis, eget tristique magna ultrices. Morbi sed tempor tellus. Donec commodo eros at leo pellentesque, rutrum efficitur diam consectetur. Praesent gravida laoreet enim, vitae porta leo mattis ac. Sed at varius quam. Integer eget odio egestas, vestibulum risus in, consequat leo. Suspendisse vitae quam eget quam malesuada rhoncus at sit amet est.',
                'user_id' => 1,

            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 10',
                'libelle' => 'Quisque ut viverra nibh. Pellentesque fermentum enim at tortor viverra gravida vel nec dolor. Donec mauris odio, sodales blandit tempus id, euismod eget enim. Nam vel lacus ut quam lacinia ultrices. Nam posuere mi id mauris malesuada sagittis. Fusce ac vehicula lorem. Pellentesque vulputate at odio ac fringilla.',
                'user_id' => 1,

            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 11',
                'libelle' => 'Nulla facilisi. Quisque urna eros, dictum sed magna vitae, placerat congue ipsum. Integer arcu ligula, semper quis eros vel, sodales tempus diam. Vivamus cursus eros rhoncus turpis hendrerit venenatis. Nam quis mi eget massa lobortis rhoncus. Suspendisse potenti. Donec interdum tincidunt velit, id elementum orci posuere vel.
                              Sed et ante euismod, ultricies risus eget, pulvinar ante. Curabitur vitae libero libero. Duis posuere nisl accumsan purus vulputate semper. Sed eleifend risus quis ligula eleifend, quis pellentesque ligula mollis. Nam sagittis lacus sem, at vehicula metus aliquam in. Morbi nec nisl sem. Curabitur diam ligula, fermentum ac scelerisque a, facilisis quis enim. Sed vehicula diam enim, id rutrum ipsum scelerisque eget. Praesent metus urna, ultrices mattis ante non, hendrerit sollicitudin ante. In mollis aliquet sagittis.',
                'user_id' => 1,

            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 12',
                'libelle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet justo aliquam nisi euismod gravida. Aliquam erat volutpat. Phasellus vehicula egestas sapien, eu fringilla libero. Vivamus vel dolor ipsum. Morbi augue risus, dictum ut risus a, dignissim pharetra libero. Phasellus sed mi neque. Praesent feugiat, leo quis ornare dignissim, libero tellus tristique augue, non vestibulum sem tellus non sapien. Sed sed dui vel nibh dapibus interdum vitae et dolor. Aenean scelerisque, sem vel suscipit fringilla, eros urna tempus dolor, a pulvinar nisl mauris ac mauris. Duis tempor turpis nec maximus pretium. Donec ut rutrum magna. Nam sodales mattis metus, porttitor aliquam dolor mattis at. Praesent nec est imperdiet eros feugiat dictum ut vitae ipsum. Phasellus consequat lacus eget purus feugiat, vitae auctor justo tristique. Praesent in consectetur tellus.
                Aenean ullamcorper libero vitae diam pretium dictum. Pellentesque vel dapibus metus. Maecenas facilisis ut risus non placerat. Quisque semper aliquet diam, et ornare ante laoreet quis. Suspendisse consequat at arcu et hendrerit. Vestibulum vel ex vitae tellus blandit vulputate at in lectus. Phasellus euismod diam ac risus ornare, sed tristique nibh fringilla. Suspendisse at volutpat risus, sit amet suscipit eros. Mauris finibus sem sit amet ornare aliquam. Praesent ac leo nisl. Quisque eget dui nibh. Quisque vulputate in massa ut tempor. Nunc tincidunt sapien quis maximus pellentesque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;',
                'user_id' => 1,

            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 13',
                'libelle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque gravida lectus a metus auctor, eget cursus libero eleifend. Sed pellentesque erat in magna finibus, vitae vehicula lectus luctus. Ut ultricies posuere lacus, id ornare augue tristique id. Proin porttitor mauris nisi. Quisque id lorem justo. Aliquam erat volutpat. Etiam ullamcorper sapien non libero malesuada venenatis.
                              Aliquam vitae aliquet augue, eu posuere orci. Nunc varius, tortor ac convallis tristique, nulla ligula ultrices purus, lobortis venenatis augue nisl imperdiet velit. Fusce dignissim pharetra enim, placerat pharetra dolor laoreet ac. Vivamus non ex enim. Cras scelerisque ligula tellus, vitae fringilla nibh venenatis quis. In non iaculis enim. Morbi ipsum odio, efficitur sed malesuada in, tristique vel mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel eros non massa egestas bibendum ac ut tellus. Duis sit amet neque sapien. Morbi euismod nulla dui, at congue augue pretium vel. Suspendisse cursus, nibh ac semper vestibulum, dui lacus fringilla nisi, quis vestibulum turpis neque eu eros.
                              Cras laoreet sed lectus vel tempor. Integer lobortis interdum tellus ac eleifend. Nulla auctor vehicula arcu ac interdum. Curabitur euismod tellus posuere porta maximus. Sed ut neque eleifend, varius ante quis, malesuada ex. Vestibulum eros velit, molestie quis consequat a, aliquam in dui. Proin iaculis, est in commodo bibendum, ante arcu sodales dolor, sed aliquam mi orci ac purus. Donec at malesuada metus. Vestibulum ultrices ultricies laoreet. Duis ut ligula et velit ullamcorper molestie. Sed vitae neque ex. Aliquam tortor diam, vestibulum eu bibendum quis, malesuada in felis.
                              Suspendisse sollicitudin porta venenatis. Maecenas in quam elementum, tincidunt enim ut, condimentum lorem. Fusce quis mauris in risus malesuada euismod ut at lacus. Fusce molestie suscipit quam, a ultricies nisl ultricies eget. Quisque suscipit hendrerit nisi in auctor. Praesent vel orci dapibus, bibendum augue quis, facilisis enim. Sed ullamcorper aliquet dolor ut rhoncus. Nullam ut quam ac mauris dictum consectetur. Nulla vel justo tincidunt, vestibulum turpis vitae, volutpat ipsum. Pellentesque pellentesque venenatis justo a congue. Donec vel eleifend ex. Nam tincidunt ultrices diam, ut tempor augue maximus ac. Praesent placerat dignissim mollis. Suspendisse potenti.
                              Morbi ac ullamcorper mi. Suspendisse orci ligula, eleifend quis odio quis, tincidunt sollicitudin nibh. Ut tempus ex urna, id ornare magna ultrices id. Praesent rutrum lectus sit amet fermentum pellentesque. Nulla laoreet orci quis semper sagittis. In hac habitasse platea dictumst. Praesent faucibus dictum vulputate. Integer imperdiet ornare dui sodales pharetra. Nunc volutpat dui consectetur, malesuada mi ac, cursus neque. Fusce ut tincidunt felis, in finibus urna.',
                'user_id' => 1,

            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 14',
                'libelle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh est, laoreet sit amet mollis sit amet, venenatis vel sapien. Cras id eros sed sem vulputate feugiat. Phasellus tempor vitae dolor eget dignissim. Cras suscipit, lorem ac sollicitudin blandit, dui dui imperdiet nulla, non vulputate justo neque et ante. In consequat purus sit amet neque rutrum feugiat. Etiam interdum dui odio, sed varius sem venenatis a. Nullam imperdiet tristique velit. Proin vel scelerisque elit. Aliquam nec magna sed erat hendrerit hendrerit ac quis ipsum. Etiam condimentum blandit mi eget laoreet. Nulla at egestas lectus. Praesent vestibulum nisl a orci pulvinar tincidunt.
                              Suspendisse dapibus bibendum nisl et consequat. Praesent porttitor, dui non commodo maximus, elit nunc congue lorem, sed interdum felis ante et leo. Aenean pulvinar, magna eget dapibus sodales, ante purus pretium odio, et mollis dolor nisl non leo. Vestibulum tellus magna, molestie sit amet lacus id, tempor semper purus. Morbi in nisl sed orci mollis molestie a vitae lorem. Etiam at vestibulum nulla, at rutrum enim. Praesent non justo ac ante faucibus tempus et vitae mi. Ut sem lorem, gravida in imperdiet sit amet, porttitor id dolor. Integer dictum vestibulum augue non interdum.
                              Sed consectetur, tortor et posuere mattis, augue magna dictum dolor, sed maximus velit diam sed mi. Duis eu ornare neque. Vivamus sodales nibh quam, nec ornare massa auctor vel. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus dictum dui iaculis metus sollicitudin, sed finibus augue sollicitudin. Duis tempus magna et lorem tempus aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus posuere sed sapien accumsan consectetur. Etiam aliquet ex ac purus feugiat finibus. Sed eu eleifend tellus. Sed faucibus eros eget magna condimentum pellentesque.
                              Proin ac dolor volutpat odio iaculis lacinia at eget lacus. Nulla facilisi. Duis laoreet, libero eget hendrerit dictum, justo urna rutrum dolor, sed imperdiet tellus dui eget sapien. Cras magna ligula, sodales non eros at, scelerisque tristique nibh. Integer at efficitur magna. Praesent sagittis ante ac enim accumsan faucibus. Sed magna tellus, scelerisque ut velit sit amet, tristique auctor tellus.
                              Proin non elementum diam. Ut pharetra tortor massa, sed bibendum elit fringilla sed. Etiam posuere malesuada sollicitudin. Nunc id velit tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam at imperdiet turpis. Integer vel massa vulputate, ornare magna eget, laoreet justo.',
                'user_id' => 1,

            ]
        );
        DB::table('articles')->insert(
            [
                'titre' => 'Article 15',
                'libelle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mauris eget justo finibus iaculis. Nullam ac dictum ex, in sagittis urna. Curabitur et odio ut erat blandit convallis. Praesent tincidunt lorem in erat vulputate pulvinar. Duis venenatis suscipit turpis, a efficitur nibh maximus sit amet. Sed lectus neque, blandit et mi id, elementum hendrerit sem. Cras sit amet quam aliquet, egestas ante sed, vehicula erat. Aenean scelerisque nunc at libero sollicitudin, eget auctor mauris finibus. Etiam mollis elit eget volutpat rhoncus. Donec eget lorem sit amet nibh blandit pulvinar. Fusce efficitur feugiat quam, eu congue est laoreet eget. Curabitur nec finibus risus. Duis lobortis molestie semper.
                              Ut et ultricies enim, sed vehicula mi. Nam in ex nec nulla rhoncus efficitur. Pellentesque elit sem, feugiat at tellus vel, sollicitudin molestie lacus. Morbi vel nulla ex. Aliquam accumsan condimentum gravida. Fusce malesuada massa in imperdiet fermentum. Vestibulum et accumsan felis. Aliquam vel tincidunt eros, ac placerat sem. Sed malesuada faucibus mi, et sodales tellus placerat non. Donec sed sem egestas, efficitur lorem luctus, vestibulum orci. Aliquam consequat consequat pharetra. Nullam ornare, ligula at sollicitudin finibus, tellus metus auctor ipsum, vitae ornare felis eros ut odio. Mauris vitae pellentesque nibh. Vestibulum posuere ex nibh, ornare tincidunt augue feugiat ut. Donec vestibulum felis elit, eget volutpat leo viverra non.
                              Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer lobortis mauris quis neque posuere hendrerit. Proin vestibulum libero leo, in bibendum velit ultricies eget. Donec id lorem sit amet lorem semper commodo. Quisque a diam iaculis, posuere ligula vitae, auctor dolor. Nulla luctus consequat odio sed commodo. Aenean pellentesque est sit amet orci porttitor, ut ornare eros blandit. Etiam accumsan et lectus a mollis. Nam malesuada dui ligula, at aliquam dui fringilla eget. Cras non magna a sapien pharetra cursus. Praesent vel dictum tellus, a vestibulum lorem. Donec malesuada luctus rutrum. Aliquam erat volutpat. Nam nec tellus sed neque iaculis egestas. Curabitur sit amet tristique dolor, nec pellentesque nulla. Nulla hendrerit, eros non elementum ornare, purus nisl mollis justo, at auctor lorem lectus et felis.
                              Ut in vehicula purus. Maecenas vitae dui sed eros consequat tincidunt. Phasellus eu ligula ac risus ultrices aliquet. Sed tincidunt neque nec urna ultrices bibendum. Mauris vitae sapien libero. Nulla pellentesque lectus in lectus porttitor, quis luctus nisl sagittis. Donec eu quam commodo, lacinia magna sit amet, dignissim ipsum. Phasellus lorem metus, sagittis in turpis at, dictum sodales lorem. Proin ipsum urna, dapibus ut eleifend eu, varius eu purus. Suspendisse non feugiat tortor. Proin ac magna vulputate, malesuada ipsum ac, fringilla tellus. Proin sed lobortis libero.
                              Sed in condimentum ipsum. Phasellus convallis imperdiet nulla, ac fringilla nisl vehicula non. Suspendisse vel nibh finibus lectus malesuada elementum. Ut vestibulum porttitor nulla non dapibus. Praesent cursus faucibus fermentum. Nullam suscipit, dolor ut tristique maximus, tortor lacus posuere dui, fringilla congue dui enim vitae velit. Integer eget purus sit amet turpis vehicula luctus. Fusce enim tellus, lobortis at laoreet in, pulvinar eget diam. Sed sagittis purus eget leo ultricies, et sagittis ante condimentum.',
                'user_id' => 1,

            ]
        );
        DB::table('commentaires')->insert(
            [
                'contenu' => 'Un article très sympas !',
                'user_id' => 1,
                'article_id'=>1,
            ]
        );
        DB::table('notesarticle')->insert(
            [
                'note' => 9,
                'article_id'=>1,
                'user_id' => 1,
            ]
        );

        $this->call([CategorieArticleSeeder::class]);

    }
}
