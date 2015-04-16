public class Hello{
    public static void Main(){
        // 自分の得意な言語で
        // Let's チャレンジ！！
        string n = System.Console.ReadLine();
        int c = 0;
        int m = int.Parse(n);
        
        System.Net.IPAddress address;
        
        for(c=0; c<m; c++)
        {
            string num = System.Console.ReadLine();
            
            if(System.Net.IPAddress.TryParse(num, out address))
            {
                System.Console.WriteLine("True");
            }
            else
            {
                System.Console.WriteLine("False");
            }
        }
    }
}
//実行確認は正解ですが全パスができませんでした。
//デバック中です。