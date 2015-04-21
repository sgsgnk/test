public class Hello{
    public static void Main(){
        // 自分の得意な言語で
        // Let's チャレンジ！！
        var day = System.Console.ReadLine();
        int d = int.Parse(day);
        int counter;
        int [] week = new int[7];
        int x;
        
        for(counter=0; counter<d; counter++)
        {
            if(counter > 6)
            {
                x = counter % 7;
            }
            else
            {
                x = counter;
            }
            
            var price = System.Console.ReadLine();
            int p = int.Parse(price);
            
            week[x] += p;
        }
        foreach (int w in week)
        System.Console.WriteLine(w);
    }
}

//全パスしました！
