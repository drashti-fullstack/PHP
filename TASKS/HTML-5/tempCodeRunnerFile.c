#include<stdio.h>
int main()
{
	int n1,n2,i,j;
	printf("\nEnter the starting value = ");
	scanf("%d",&n1);
	printf("\nEnter the Ending value = ");
	scanf("%d",&n2);
	int col = (n2-n1)/10;
	int temp = n1 + 1;
	int copy = temp;
	for(i=1;i<=10;i++)
	{
		temp = copy;
		for(j=1;j<=col;j++)
		{
			if(j!=1)
			{
				temp = temp + 10;
			}
			printf("%d ",temp);
		}
		printf("\n");
		copy++;
	}
	return 0;
}